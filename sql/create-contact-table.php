<?php
/**
 * Senapathi Alliance - SQL Setup: Contact Enquiries Table
 * URL: http://localhost/senapathi.co.in/sql/create-contact-table.php
 */

require_once __DIR__ . '/../includes/db-config.php';

$message = '';
$status = 'success';
$details = [];

if (!$pdo) {
    $status = 'error';
    $err = !empty($GLOBALS['db_connection_error']) ? $GLOBALS['db_connection_error'] : 'Unknown database connection error.';
    $message = "Database connection failed: " . $err;
} else {
    try {
        // Create contact_enquiries table
        $createTableSql = "CREATE TABLE IF NOT EXISTS `contact_enquiries` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(150) NOT NULL,
            `entity_name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(150) NOT NULL,
            `phone` VARCHAR(50) NOT NULL,
            `service_line` VARCHAR(255) NOT NULL,
            `message` TEXT NULL,
            `status` ENUM('Pending', 'In Review', 'Contacted', 'Closed') DEFAULT 'Pending',
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

        $pdo->exec($createTableSql);
        $details[] = "Table `contact_enquiries` verified / created successfully.";

        // Count existing records
        $count = $pdo->query("SELECT COUNT(*) FROM `contact_enquiries`")->fetchColumn();
        $details[] = "Current total inquiries in database: {$count}.";

        $message = "Contact enquiries table has been initialized successfully in database `senapathi_db`!";
    } catch (Throwable $e) {
        $status = 'error';
        $message = "SQL Setup Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Setup Contact Table | Senapathi Alliance</title>
  <link rel="icon" type="image/png" href="../assets/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #f1f5f9;
      color: #0f172a;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
      margin: 0;
    }
    .setup-card {
      background: #ffffff;
      max-width: 580px;
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(11, 37, 69, 0.1);
      border: 1px solid #e2e8f0;
      overflow: hidden;
    }
    .setup-head {
      background: #071527;
      color: #ffffff;
      padding: 30px;
      text-align: center;
    }
    .setup-head h2 {
      font-family: 'Outfit', sans-serif;
      font-size: 1.5rem;
      margin: 10px 0 4px 0;
    }
    .setup-head p {
      color: #94a3b8;
      font-size: 0.85rem;
      margin: 0;
    }
    .setup-body {
      padding: 32px 30px;
    }
    .status-alert {
      padding: 16px;
      border-radius: 12px;
      font-size: 0.92rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 24px;
    }
    .status-alert.success {
      background: #ecfdf5;
      color: #065f46;
      border: 1px solid #a7f3d0;
    }
    .status-alert.error {
      background: #fef2f2;
      color: #991b1b;
      border: 1px solid #fecaca;
    }
    .log-list {
      list-style: none;
      padding: 0;
      margin: 0 0 24px 0;
      font-size: 0.85rem;
      color: #475569;
    }
    .log-list li {
      padding: 8px 12px;
      background: #f8fafc;
      border-radius: 8px;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
      border: 1px solid #e2e8f0;
    }
    .log-list li i {
      color: #10b981;
    }
    .btn-group-nav {
      display: flex;
      gap: 12px;
    }
    .btn-primary-action {
      flex: 1;
      text-align: center;
      background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
      color: #ffffff;
      padding: 12px;
      border-radius: 12px;
      font-weight: 700;
      font-size: 0.9rem;
      text-decoration: none;
      box-shadow: 0 6px 16px rgba(2, 132, 199, 0.25);
    }
    .btn-secondary-action {
      flex: 1;
      text-align: center;
      background: #f1f5f9;
      color: #334155;
      padding: 12px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 0.9rem;
      text-decoration: none;
      border: 1px solid #cbd5e1;
    }
  </style>
</head>
<body>

  <div class="setup-card">
    <div class="setup-head">
      <i class="fa-solid fa-envelope-circle-check" style="font-size: 2.5rem; color: #38bdf8;"></i>
      <h2>Contact Enquiries Table Setup</h2>
      <p>RFP &amp; Public Consultation Intake Schema</p>
    </div>

    <div class="setup-body">
      <div class="status-alert <?= $status ?>">
        <i class="fa-solid <?= $status === 'success' ? 'fa-circle-check' : 'fa-triangle-exclamation' ?>" style="font-size: 1.25rem;"></i>
        <span><?= htmlspecialchars($message) ?></span>
      </div>

      <ul class="log-list">
        <?php foreach ($details as $line): ?>
          <li><i class="fa-solid fa-check"></i> <?= htmlspecialchars($line) ?></li>
        <?php endforeach; ?>
      </ul>

      <div class="btn-group-nav">
        <a href="../index.php#contact" target="_blank" class="btn-secondary-action">
          <i class="fa-solid fa-globe mr-1"></i> View Contact Form
        </a>
        <a href="../admin/index.php" class="btn-primary-action">
          <i class="fa-solid fa-gauge mr-1"></i> Admin Dashboard
        </a>
      </div>
    </div>
  </div>

</body>
</html>
