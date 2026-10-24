<?php
/**
 * Senapathi Alliance - Contact / RFP Submission Endpoint
 * Receives public advisory inquiries and stores them in contact_enquiries
 */

require_once __DIR__ . '/includes/db-config.php';

$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') 
       || (isset($_SERVER['CONTENT_TYPE']) && strpos($_SERVER['CONTENT_TYPE'], 'application/json') !== false)
       || (isset($_POST['ajax']) && $_POST['ajax'] == '1');

// Enable JSON response if AJAX
function sendResponse($status, $message, $extra = []) {
    global $isAjax;
    if ($isAjax) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array_merge(['status' => $status, 'message' => $message], $extra));
        exit();
    } else {
        if ($status === 'success') {
            header("Location: index.php?enquiry=success#contact");
        } else {
            header("Location: index.php?enquiry=error&msg=" . urlencode($message) . "#contact");
        }
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse('error', 'Invalid request method.');
}

if (!$pdo) {
    sendResponse('error', 'Database service currently offline. Please contact us via email at contact@senapathi.co.in.');
}

// Read inputs (supports both form-urlencoded/FormData and json payload)
$contentType = $_SERVER["CONTENT_TYPE"] ?? '';
if (strpos($contentType, 'application/json') !== false) {
    $rawInput = file_get_contents('php://input');
    $inputData = json_decode($rawInput, true) ?? [];
} else {
    $inputData = $_POST;
}

$name        = trim($inputData['name'] ?? $inputData['rfpName'] ?? '');
$entityName  = trim($inputData['entity_name'] ?? $inputData['rfpOrg'] ?? '');
$email       = trim($inputData['email'] ?? $inputData['rfpEmail'] ?? '');
$phone       = trim($inputData['phone'] ?? $inputData['rfpPhone'] ?? '');
$serviceLine = trim($inputData['service_line'] ?? $inputData['rfpService'] ?? '');
$message     = trim($inputData['message'] ?? $inputData['rfpMessage'] ?? '');

// Validation
if (empty($name) || empty($entityName) || empty($email) || empty($phone) || empty($serviceLine)) {
    sendResponse('error', 'Please fill in all mandatory fields (Name, Entity, Email, Contact Phone, and Service Line).');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse('error', 'Please provide a valid official work email address.');
}

try {
    // Ensure table exists just in case
    $pdo->exec("CREATE TABLE IF NOT EXISTS `contact_enquiries` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(150) NOT NULL,
        `entity_name` VARCHAR(255) NOT NULL,
        `email` VARCHAR(150) NOT NULL,
        `phone` VARCHAR(50) NOT NULL,
        `service_line` VARCHAR(255) NOT NULL,
        `message` TEXT NULL,
        `status` ENUM('Pending', 'In Review', 'Contacted', 'Closed') DEFAULT 'Pending',
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");

    $stmt = $pdo->prepare("INSERT INTO `contact_enquiries` 
        (`name`, `entity_name`, `email`, `phone`, `service_line`, `message`, `status`) 
        VALUES (?, ?, ?, ?, ?, ?, 'Pending')");

    $stmt->execute([$name, $entityName, $email, $phone, $serviceLine, $message]);
    $insertedId = $pdo->lastInsertId();

    sendResponse('success', 'Your advisory inquiry has been registered successfully. Our senior sectoral lead will contact you within 1 business day.', [
        'id' => $insertedId,
        'ref' => 'RFP-' . date('Y') . '-' . str_pad($insertedId, 3, '0', STR_PAD_LEFT)
    ]);
} catch (Throwable $e) {
    sendResponse('error', 'Could not save inquiry: ' . $e->getMessage());
}
