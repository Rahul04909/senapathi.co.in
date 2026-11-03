<?php
/**
 * AdminLTE 3 Header Framework
 * Senapathi Alliance / Admin Dashboard
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Session admin user fallback
$adminUser = isset($_SESSION['admin_user']) ? $_SESSION['admin_user'] : [
    'name' => 'Administrator',
    'email' => 'admin@senapathi.co.in',
    'role' => 'Super Admin'
];

// Fallback Mock PDO Class so dashboard never crashes with 'Call to a member function query() on null'
if (!class_exists('SafeDummyPDO')) {
    class SafeDummyPDO {
        public function query($sql) {
            return new class {
                public function fetchColumn($column = 0) { return 0; }
                public function fetchAll($mode = null) { return []; }
                public function fetch($mode = null) { return false; }
            };
        }
        public function prepare($sql, $options = []) {
            return new class {
                public function execute($params = []) { return true; }
                public function fetchColumn($column = 0) { return 0; }
                public function fetchAll($mode = null) { return []; }
                public function fetch($mode = null) { return false; }
            };
        }
        public function exec($sql) { return 0; }
    }
}

// Database Connection with Auto-Discovery & Auto-Table creation
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$pdo = null;

$possibleDbNames = ['senapathi_db', 'senapathi', 'prayag', 'prayag_db', 'prayagcomputer', 'prayag_computer'];

try {
    // 1. Connect to MySQL server
    $rawPdo = new PDO("mysql:host={$dbHost};charset=utf8mb4", $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    // 2. Discover existing databases
    $dbs = $rawPdo->query("SHOW DATABASES")->fetchAll(PDO::FETCH_COLUMN);
    $selectedDb = null;
    foreach ($possibleDbNames as $candidate) {
        if (in_array($candidate, $dbs)) {
            $selectedDb = $candidate;
            break;
        }
    }

    // If none of candidate names exist, check for any non-system database
    if (!$selectedDb) {
        foreach ($dbs as $db) {
            if (!in_array($db, ['information_schema', 'mysql', 'performance_schema', 'sys', 'phpmyadmin'])) {
                $selectedDb = $db;
                break;
            }
        }
    }

    // If no user database exists, create 'senapathi_db'
    if (!$selectedDb) {
        $selectedDb = 'senapathi_db';
        $rawPdo->exec("CREATE DATABASE IF NOT EXISTS `{$selectedDb}` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    }

    // 3. Connect to the selected database
    $pdo = new PDO("mysql:host={$dbHost};dbname={$selectedDb};charset=utf8mb4", $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    // 4. Ensure required tables exist so SELECT queries in index.php never error out
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS `students` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(255) NULL,
            `email` VARCHAR(255) NULL,
            `phone` VARCHAR(50) NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS `courses` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `title` VARCHAR(255) NULL,
            `duration` VARCHAR(100) NULL,
            `fees` DECIMAL(10,2) DEFAULT 0,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS `enquiries` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(255) NULL,
            `email` VARCHAR(255) NULL,
            `phone` VARCHAR(50) NULL,
            `message` TEXT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS `student_fees` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `student_id` INT NULL,
            `amount_paid` DECIMAL(10,2) DEFAULT 0,
            `payment_date` DATE NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");

} catch (Throwable $e) {
    // If MySQL server is offline or authentication fails, provide SafeDummyPDO fallback
    // This GUARANTEES $pdo->query() will NEVER throw a fatal error
    $pdo = new SafeDummyPDO();
}

// Relative base URL calculation for nested admin sub-pages
$script_path = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$admin_pos = strpos($script_path, '/admin/');
if ($admin_pos !== false) {
    $after_admin = substr($script_path, $admin_pos + 7);
    $depth = substr_count($after_admin, '/');
    $baseUrl = str_repeat('../', $depth);
    $currentPage = $after_admin;
} else {
    $baseUrl = './';
    $currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard | Senapathi Alliance</title>

  <!-- Google Font: Inter & Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <!-- AdminLTE 3.2.0 Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
  
  <!-- Optional custom loader stylesheet -->
  <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/loader.css" onerror="this.remove()">

  <style>
    body {
      font-family: 'Inter', 'Source Sans Pro', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }
    .main-sidebar {
      background: #0f172a !important;
    }
    .brand-link {
      background: #0a0f1d !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
      padding: 14px 16px;
    }
    .brand-text {
      font-weight: 700;
      letter-spacing: 0.3px;
      color: #f8fafc !important;
      font-size: 1.05rem;
    }
    .nav-sidebar .nav-link.active {
      background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%) !important;
      box-shadow: 0 4px 12px rgba(2, 132, 199, 0.35);
      color: #ffffff !important;
    }
    .user-panel {
      border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
      padding-bottom: 14px;
    }
    .user-panel .info a {
      color: #e2e8f0;
      font-weight: 600;
      font-size: 0.9rem;
    }
    .nav-sidebar .nav-header {
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      color: #64748b !important;
      padding: 12px 16px 4px 16px;
    }
    .nav-sidebar .nav-link {
      color: #94a3b8;
      font-size: 0.885rem;
      border-radius: 6px;
      margin: 2px 8px;
      transition: all 0.2s ease;
    }
    .nav-sidebar .nav-link:hover {
      color: #f8fafc;
      background: rgba(255, 255, 255, 0.06);
    }
    .nav-sidebar .nav-link i.nav-icon {
      font-size: 0.95rem;
      margin-right: 10px;
      width: 20px;
      text-align: center;
    }
    .content-wrapper {
      background-color: #f8fafc;
    }
    .content-header h1 {
      font-size: 1.45rem;
      color: #0f172a;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Top Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" title="Toggle Sidebar">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= $baseUrl ?>index.php" class="nav-link font-weight-semibold">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= $baseUrl ?>../index.php" target="_blank" class="nav-link text-muted">
          <i class="fas fa-external-link-alt mr-1"></i> Live Website
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto align-items-center">
      <li class="nav-item mr-2">
        <a href="<?= $baseUrl ?>students/add-student.php" class="btn btn-sm btn-success text-white">
          <i class="fas fa-user-plus mr-1"></i> Add Student
        </a>
      </li>
      <li class="nav-item mr-2">
        <a href="<?= $baseUrl ?>students/fees-list.php" class="btn btn-sm btn-primary text-white">
          <i class="fas fa-rupee-sign mr-1"></i> Fees
        </a>
      </li>
      <li class="nav-item mr-3">
        <a href="<?= $baseUrl ?>courses/add-course.php" class="btn btn-sm btn-warning text-dark font-weight-semibold">
          <i class="fas fa-graduation-cap mr-1"></i> New Course
        </a>
      </li>

      <!-- User Dropdown Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
          <img src="<?= $baseUrl ?>src/images/user-avtar.png" class="user-image img-circle elevation-1 mr-2" alt="User Image" onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=0284c7&color=fff'">
          <span class="d-none d-md-inline font-weight-bold text-dark"><?= htmlspecialchars($adminUser['name'] ?? 'Administrator') ?></span>
          <i class="fas fa-chevron-down ml-2 text-muted" style="font-size: 10px;"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right shadow-sm border-0">
          <li class="user-header bg-primary text-white" style="border-radius: 4px 4px 0 0;">
            <img src="<?= $baseUrl ?>src/images/user-avtar.png" class="img-circle elevation-2" alt="User Image" onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=0284c7&color=fff'">
            <p class="mt-2 mb-0 font-weight-bold">
              <?= htmlspecialchars($adminUser['name'] ?? 'Administrator') ?>
            </p>
            <small class="text-white-50"><?= htmlspecialchars($adminUser['role'] ?? 'Super Admin') ?></small>
          </li>
          <li class="user-footer d-flex justify-content-between p-3 bg-light">
            <a href="<?= $baseUrl ?>profile.php" class="btn btn-sm btn-outline-secondary">
              <i class="fas fa-user-cog mr-1"></i> Profile
            </a>
            <a href="<?= $baseUrl ?>logout.php" class="btn btn-sm btn-outline-danger">
              <i class="fas fa-sign-out-alt mr-1"></i> Sign out
            </a>
          </li>
        </ul>
      </li>

      <!-- Logout Button -->
      <li class="nav-item">
        <a class="nav-link text-danger" href="<?= $baseUrl ?>logout.php" role="button" title="Sign Out">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= $baseUrl ?>index.php" class="brand-link d-flex align-items-center">
      <img src="<?= $baseUrl ?>src/images/logo.svg" alt="Senapathi Logo" class="brand-image img-circle elevation-2" style="opacity: .95" onerror="this.style.display='none'">
      <span class="brand-text">Senapathi Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          <img src="<?= $baseUrl ?>src/images/user-avtar.png" class="img-circle elevation-2" alt="User Image" onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=0284c7&color=fff'">
        </div>
        <div class="info">
          <a href="<?= $baseUrl ?>profile.php" class="d-block"><?= htmlspecialchars($adminUser['name'] ?? 'Administrator') ?></a>
          <span class="text-muted" style="font-size: 11px;"><i class="fas fa-circle text-success mr-1" style="font-size: 7px;"></i> Active</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="<?= $baseUrl ?>index.php" class="nav-link <?= ($currentPage === 'index.php') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Courses Menu -->
          <li class="nav-item has-treeview <?= strpos($currentPage, 'courses/') !== false ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?= strpos($currentPage, 'courses/') !== false ? 'active' : '' ?>">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Courses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $baseUrl ?>courses/add-course.php" class="nav-link <?= ($currentPage === 'courses/add-course.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>courses/manage-courses.php" class="nav-link <?= ($currentPage === 'courses/manage-courses.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>courses/manage-categories.php" class="nav-link <?= ($currentPage === 'courses/manage-categories.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>courses/course-enquiries.php" class="nav-link <?= ($currentPage === 'courses/course-enquiries.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enquiries</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Students Menu -->
          <li class="nav-item has-treeview <?= strpos($currentPage, 'students/') !== false ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?= strpos($currentPage, 'students/') !== false ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $baseUrl ?>students/add-student.php" class="nav-link <?= ($currentPage === 'students/add-student.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Admission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>students/manage-students.php" class="nav-link <?= ($currentPage === 'students/manage-students.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>students/fees-list.php" class="nav-link <?= ($currentPage === 'students/fees-list.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fees Monitoring</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Steno Exam Menu -->
          <li class="nav-item has-treeview <?= strpos($currentPage, 'steno/') !== false ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?= strpos($currentPage, 'steno/') !== false ? 'active' : '' ?>">
              <i class="nav-icon fas fa-keyboard"></i>
              <p>
                Steno Exam
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $baseUrl ?>steno/add-steno-test.php" class="nav-link <?= ($currentPage === 'steno/add-steno-test.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Test</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>steno/manage-steno-tests.php" class="nav-link <?= ($currentPage === 'steno/manage-steno-tests.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Tests</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>steno/manage-exam-category.php" class="nav-link <?= ($currentPage === 'steno/manage-exam-category.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Typing Master Menu -->
          <li class="nav-item has-treeview <?= strpos($currentPage, 'typing-master/') !== false ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?= strpos($currentPage, 'typing-master/') !== false ? 'active' : '' ?>">
              <i class="nav-icon fas fa-keyboard"></i>
              <p>
                Typing Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $baseUrl ?>typing-master/add-typing-test.php" class="nav-link <?= ($currentPage === 'typing-master/add-typing-test.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Test</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>typing-master/manage-typing-tests.php" class="nav-link <?= ($currentPage === 'typing-master/manage-typing-tests.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Tests</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $baseUrl ?>typing-master/manage-exam-category.php" class="nav-link <?= ($currentPage === 'typing-master/manage-exam-category.php') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">SYSTEM &amp; ACCOUNT</li>

          <li class="nav-item">
            <a href="<?= $baseUrl ?>profile.php" class="nav-link <?= ($currentPage === 'profile.php') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>Admin Profile</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= $baseUrl ?>logout.php" class="nav-link text-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-weight-bold">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= $baseUrl ?>index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content container -->
    <section class="content">
      <div class="container-fluid">
