<?php
/**
 * Senapathi Alliance - RFP & Contact Form Submission Processor
 * Dispatches inquiries via cPanel SMTP and logs them securely into the database
 */

// 1. Initialize environment, database & mailer
require_once __DIR__ . '/includes/env-loader.php';
require_once __DIR__ . '/includes/db-config.php';
require_once __DIR__ . '/includes/mailer.php';

// Detect AJAX request
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || isset($_POST['ajax']);

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
        exit;
    }
    header('Location: index.php#contact');
    exit;
}

// 2. Extract and sanitize form inputs
$name        = trim($_POST['name'] ?? '');
$entityName  = trim($_POST['entity_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$serviceLine = trim($_POST['service_line'] ?? 'General Advisory');
$message     = trim($_POST['message'] ?? '');
$ipAddress   = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

// Validation
if (empty($name) || empty($email) || empty($phone)) {
    $errorMsg = 'Please complete all required fields (Full Name, Official Email, and Contact Number).';
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => $errorMsg]);
        exit;
    }
    header('Location: index.php?enquiry=error#contact');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg = 'Please provide a valid corporate or official email address.';
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => $errorMsg]);
        exit;
    }
    header('Location: index.php?enquiry=invalid_email#contact');
    exit;
}

// 3. Database Logging (Never lose an enquiry even if mail server fails)
$insertedId = 0;
try {
    $db = get_db_connection();
    if ($db) {
        // Ensure enquiries table exists
        $db->exec("
            CREATE TABLE IF NOT EXISTS `enquiries` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `name` VARCHAR(255) NOT NULL,
                `entity_name` VARCHAR(255) NULL,
                `email` VARCHAR(255) NOT NULL,
                `phone` VARCHAR(100) NULL,
                `service_line` VARCHAR(255) NULL,
                `message` TEXT NULL,
                `ip_address` VARCHAR(50) NULL,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE IF NOT EXISTS `contact_enquiries` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `name` VARCHAR(150) NOT NULL,
                `entity_name` VARCHAR(255) NOT NULL,
                `email` VARCHAR(150) NOT NULL,
                `phone` VARCHAR(50) NOT NULL,
                `service_line` VARCHAR(255) NOT NULL,
                `message` TEXT NULL,
                `status` ENUM('Pending', 'In Review', 'Contacted', 'Closed') DEFAULT 'Pending',
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ");

        $stmt = $db->prepare("
            INSERT INTO `enquiries` (`name`, `entity_name`, `email`, `phone`, `service_line`, `message`, `ip_address`)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");
        $stmt->execute([$name, $entityName, $email, $phone, $serviceLine, $message, $ipAddress]);
        $insertedId = $db->lastInsertId();

        $stmt2 = $db->prepare("
            INSERT INTO `contact_enquiries` (`name`, `entity_name`, `email`, `phone`, `service_line`, `message`, `status`)
            VALUES (?, ?, ?, ?, ?, ?, 'Pending')
        ");
        $stmt2->execute([$name, $entityName, $email, $phone, $serviceLine, $message]);
    }
} catch (Throwable $dbEx) {
    error_log("Database inquiry log warning: " . $dbEx->getMessage());
}

$refId = 'RFP-' . date('Y') . '-' . str_pad((string)($insertedId ?: rand(100, 999)), 3, '0', STR_PAD_LEFT);

// 4. Dispatch Email via Dual-Engine SMTP (PHPMailer + Pure-PHP Socket fallback)
$mailResult = send_enquiry_notification([
    'ref'          => $refId,
    'name'         => $name,
    'entity_name'  => $entityName,
    'email'        => $email,
    'phone'        => $phone,
    'service_line' => $serviceLine,
    'message'      => $message,
]);

// 5. Output Response
$successMessage = 'Thank you! Your advisory inquiry has been received. Our practice lead will get in touch within 1 business day.';

if ($isAjax) {
    header('Content-Type: application/json');
    echo json_encode([
        'status'     => 'success',
        'message'    => $successMessage,
        'ref'        => $refId,
        'email_sent' => $mailResult['success'] ?? false,
        'debug'      => $mailResult['message'] ?? ''
    ]);
    exit;
}

header('Location: index.php?enquiry=success#contact');
exit;
