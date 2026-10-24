<?php
/**
 * Senapathi Alliance - SQL Setup: Admin Table & Default Super Admin
 * URL: http://localhost/senapathi.co.in/sql/create-admin.php
 */

require_once __DIR__ . '/../includes/db-config.php';

$message = '';
$status = 'success';
$details = [];

if (!$pdo) {
    $status = 'error';
    $message = "Database connection failed! Ensure MySQL is running in XAMPP.";
} else {
    try {
        // 1. Create Admins Table
        $createTableSql = "CREATE TABLE IF NOT EXISTS `admins` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(100) NOT NULL,
            `email` VARCHAR(150) NOT NULL UNIQUE,
            `password` VARCHAR(255) NOT NULL,
            `role` VARCHAR(50) DEFAULT 'Super Administrator',
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
        
        $pdo->exec($createTableSql);
        $details[] = "Table `admins` verified / created successfully.";

        // 2. Check / Insert Default Super Admin
        $defaultEmail    = 'admin@senapathi.co.in';
        $defaultPassword = 'Admin@123';
        $defaultName     = 'Rahul Dhiman';
        $defaultRole     = 'Super Administrator';

        $checkStmt = $pdo->prepare("SELECT id, email FROM `admins` WHERE `email` = ? LIMIT 1");
        $checkStmt->execute([$defaultEmail]);
        $existingAdmin = $checkStmt->fetch();

        if ($existingAdmin) {
            $details[] = "Super Admin account (`{$defaultEmail}`) already exists (ID: {$existingAdmin['id']}).";
            $message = "Admins table is up-to-date and ready for login.";
        } else {
            $hashedPassword = password_hash($defaultPassword, PASSWORD_BCRYPT);
            $insertStmt = $pdo->prepare("INSERT INTO `admins` (`name`, `email`, `password`, `role`) VALUES (?, ?, ?, ?)");
            $insertStmt->execute([$defaultName, $defaultEmail, $hashedPassword, $defaultRole]);
            $newId = $pdo->lastInsertId();
            $details[] = "Super Admin user created successfully (ID: {$newId}).";
            $message = "Admin table created and default Super Admin credentials initialized!";
        }
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
  <title>Setup Admin Table | Senapathi Alliance</title>
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
    .cred-box {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 20px;
      margin-bottom: 24px;
    }
    .cred-title {
      font-size: 0.78rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #0284c7;
      margin-bottom: 12px;
    }
    .cred-row {
      display: flex;
      justify-content: space-between;
      padding: 6px 0;
      border-bottom: 1px dashed #e2e8f0;
      font-size: 0.88rem;
    }
    .cred-row:last-child {
      border-bottom: none;
    }
    .cred-label {
      color: #64748b;
      font-weight: 500;
    }
    .cred-val {
      font-weight: 700;
      color: #0f172a;
      font-family: monospace;
    }
    .log-list {
      list-style: none;
      padding: 0;
      margin: 0 0 24px 0;
      font-size: 0.82rem;
      color: #475569;
    }
    .log-list li {
      padding: 4px 0;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .log-list li i {
      color: #10b981;
      font-size: 0.75rem;
    }
    .btn-login {
      display: block;
      width: 100%;
      text-align: center;
      background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
      color: #ffffff;
      padding: 14px;
      border-radius: 12px;
      font-weight: 700;
      font-size: 0.95rem;
      text-decoration: none;
      box-shadow: 0 8px 20px rgba(2, 132, 199, 0.25);
      transition: all 0.2s ease;
      box-sizing: border-box;
    }
    .btn-login:hover {
      background: linear-gradient(135deg, #0369a1 0%, #075985 100%);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

  <div class="setup-card">
    <div class="setup-head">
      <i class="fa-solid fa-shield-halved" style="font-size: 2.5rem; color: #38bdf8;"></i>
      <h2>Senapathi Alliance Database Setup</h2>
      <p>Admin Table Initialization Engine</p>
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

      <div class="cred-box">
        <div class="cred-title"><i class="fa-solid fa-key mr-1"></i> Admin Login Credentials</div>
        <div class="cred-row">
          <span class="cred-label">Login URL</span>
          <span class="cred-val">/admin/login.php</span>
        </div>
        <div class="cred-row">
          <span class="cred-label">Default Email</span>
          <span class="cred-val">admin@senapathi.co.in</span>
        </div>
        <div class="cred-row">
          <span class="cred-label">Default Password</span>
          <span class="cred-val">Admin@123</span>
        </div>
        <div class="cred-row">
          <span class="cred-label">Administrator</span>
          <span class="cred-val">Rahul Dhiman</span>
        </div>
        <div class="cred-row">
          <span class="cred-label">Access Level</span>
          <span class="cred-val">Super Administrator</span>
        </div>
      </div>

      <a href="../admin/login.php" class="btn-login">
        Proceed to Admin Login <i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>

</body>
</html>
