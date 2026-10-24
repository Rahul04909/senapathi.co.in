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

// Database Connection ($pdo)
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'senapathi_db';

try {
    $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4", $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (Throwable $e) {
    try {
        // Attempt to create database if it doesn't exist on local MySQL server
        $serverPdo = new PDO("mysql:host={$dbHost};charset=utf8mb4", $dbUser, $dbPass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        $serverPdo->exec("CREATE DATABASE IF NOT EXISTS `{$dbName}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4", $dbUser, $dbPass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    } catch (Throwable $ex) {
        // Graceful fallback if MySQL is offline or unavailable
        $pdo = null;
    }
}

// Determine current page for active sidebar highlight
$currentPage = basename($_SERVER['PHP_SELF']);
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
  <link rel="stylesheet" href="./assets/css/loader.css" onerror="this.remove()">

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
        <a href="index.php" class="nav-link font-weight-semibold">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" target="_blank" class="nav-link text-muted">
          <i class="fas fa-external-link-alt mr-1"></i> Live Website
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Quick Status Badge -->
      <li class="nav-item d-none d-md-flex align-items-center mr-3">
        <span class="badge badge-success px-2 py-1" style="font-weight: 600;">
          <i class="fas fa-circle mr-1" style="font-size: 8px;"></i> System Online
        </span>
      </li>

      <!-- User Dropdown Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
          <img src="src/images/user-avtar.png" class="user-image img-circle elevation-1 mr-2" alt="User Image" onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=0284c7&color=fff'">
          <span class="d-none d-md-inline font-weight-bold text-dark"><?= htmlspecialchars($adminUser['name'] ?? 'Administrator') ?></span>
          <i class="fas fa-chevron-down ml-2 text-muted" style="font-size: 10px;"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right shadow-sm border-0">
          <li class="user-header bg-primary text-white" style="border-radius: 4px 4px 0 0;">
            <img src="src/images/user-avtar.png" class="img-circle elevation-2" alt="User Image" onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=0284c7&color=fff'">
            <p class="mt-2 mb-0 font-weight-bold">
              <?= htmlspecialchars($adminUser['name'] ?? 'Administrator') ?>
            </p>
            <small class="text-white-50"><?= htmlspecialchars($adminUser['role'] ?? 'Super Admin') ?></small>
          </li>
          <li class="user-footer d-flex justify-content-between p-3 bg-light">
            <a href="profile.php" class="btn btn-sm btn-outline-secondary">
              <i class="fas fa-user-cog mr-1"></i> Profile
            </a>
            <a href="logout.php" class="btn btn-sm btn-outline-danger">
              <i class="fas fa-sign-out-alt mr-1"></i> Sign out
            </a>
          </li>
        </ul>
      </li>

      <!-- Logout Button -->
      <li class="nav-item">
        <a class="nav-link text-danger" href="logout.php" role="button" title="Sign Out">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link d-flex align-items-center">
      <img src="src/images/logo.svg" alt="Senapathi Logo" class="brand-image img-circle elevation-2" style="opacity: .95" onerror="this.style.display='none'">
      <span class="brand-text">Senapathi Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          <img src="src/images/user-avtar.png" class="img-circle elevation-2" alt="User Image" onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=0284c7&color=fff'">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?= htmlspecialchars($adminUser['name'] ?? 'Administrator') ?></a>
          <span class="text-muted" style="font-size: 11px;"><i class="fas fa-circle text-success mr-1" style="font-size: 7px;"></i> Active</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="index.php" class="nav-link <?= ($currentPage === 'index.php') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-header">SYSTEM &amp; ACCOUNT</li>

          <li class="nav-item">
            <a href="profile.php" class="nav-link <?= ($currentPage === 'profile.php') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>Admin Profile</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
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
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
