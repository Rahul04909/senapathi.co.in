<?php
/**
 * Senapathi Alliance - Executive Advisory Administration Portal
 * Corporate & Government Advisory | Real-Time Inquiries Dashboard
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. Enforce Authentication Protection
if (!isset($_SESSION['admin_user'])) {
    header("Location: login.php");
    exit();
}

require_once __DIR__ . '/../includes/db-config.php';

$adminUser = $_SESSION['admin_user'];

// 2. Handle Status Update or Deletion Actions
$actionNotice = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (!$pdo) {
        $actionNotice = "Database connection offline.";
    } else {
        if ($_POST['action'] === 'update_status' && isset($_POST['enquiry_id'], $_POST['new_status'])) {
            $enquiryId = (int)$_POST['enquiry_id'];
            $newStatus = trim($_POST['new_status']);
            $allowed = ['Pending', 'In Review', 'Contacted', 'Closed'];
            if (in_array($newStatus, $allowed)) {
                $upStmt = $pdo->prepare("UPDATE `contact_enquiries` SET `status` = ? WHERE `id` = ?");
                $upStmt->execute([$newStatus, $enquiryId]);
                header("Location: index.php?msg=updated");
                exit();
            }
        } elseif ($_POST['action'] === 'delete_enquiry' && isset($_POST['enquiry_id'])) {
            $enquiryId = (int)$_POST['enquiry_id'];
            $delStmt = $pdo->prepare("DELETE FROM `contact_enquiries` WHERE `id` = ?");
            $delStmt->execute([$enquiryId]);
            header("Location: index.php?msg=deleted");
            exit();
        }
    }
}

// 3. Website Hosting 1-Year Plan Duration Calculation
$startDate       = "2026-03-08";
$expiryDate      = date('Y-m-d', strtotime($startDate . ' + 1 year'));
$currentDate     = date('Y-m-d');
$diffTotal       = (int)date_diff(date_create($startDate), date_create($expiryDate))->days;
$diffRemaining   = (int)date_diff(date_create($currentDate), date_create($expiryDate))->days;
$diffPassed      = max(0, $diffTotal - $diffRemaining);
$progressPercent = $diffTotal > 0 ? round(($diffPassed / $diffTotal) * 100) : 100;
$progressPercent = min(100, max(0, $progressPercent));

// 4. Fetch Real Inquiries & KPI Counters from Database
$totalInquiries     = 0;
$pendingInquiries   = 0;
$inReviewInquiries  = 0;
$contactedInquiries = 0;
$enquiriesList      = [];

if ($pdo) {
    try {
        // Auto-create table if not exists
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

        // KPI Counts
        $totalInquiries     = (int)$pdo->query("SELECT COUNT(*) FROM `contact_enquiries`")->fetchColumn();
        $pendingInquiries   = (int)$pdo->query("SELECT COUNT(*) FROM `contact_enquiries` WHERE `status` = 'Pending'")->fetchColumn();
        $inReviewInquiries  = (int)$pdo->query("SELECT COUNT(*) FROM `contact_enquiries` WHERE `status` = 'In Review'")->fetchColumn();
        $contactedInquiries = (int)$pdo->query("SELECT COUNT(*) FROM `contact_enquiries` WHERE `status` = 'Contacted'")->fetchColumn();

        // Enquiries Data
        $stmt = $pdo->query("SELECT * FROM `contact_enquiries` ORDER BY `created_at` DESC");
        $enquiriesList = $stmt->fetchAll();
    } catch (Throwable $e) {
        error_log("Dashboard query error: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard | Senapathi Alliance</title>
  <link rel="icon" type="image/png" href="../assets/logo.png">

  <!-- Google Fonts: Outfit & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>
    :root {
      --navy-950: #040d1a;
      --navy-900: #071527;
      --navy-850: #0b1f38;
      --navy-800: #0f2b4c;
      
      --blue-600: #0284c7;
      --blue-500: #0ea5e9;
      --blue-400: #38bdf8;
      --blue-100: #e0f2fe;
      --blue-50:  #f0f9ff;
      
      --emerald-600: #059669;
      --emerald-500: #10b981;
      --emerald-100: #d1fae5;
      
      --amber-600: #d97706;
      --amber-500: #f59e0b;
      --amber-100: #fef3c7;
      
      --rose-600: #e11d48;
      --rose-100: #ffe4e6;
      
      --slate-900: #0f172a;
      --slate-800: #1e293b;
      --slate-700: #334155;
      --slate-600: #475569;
      --slate-500: #64748b;
      --slate-400: #94a3b8;
      --slate-200: #e2e8f0;
      --slate-100: #f1f5f9;
      --slate-50:  #f8fafc;
      
      --font-display: 'Outfit', sans-serif;
      --font-body: 'Inter', sans-serif;
      
      --card-radius: 16px;
      --pill-radius: 9999px;
      --shadow-sm: 0 1px 3px rgba(7, 21, 39, 0.05);
      --shadow-md: 0 4px 14px rgba(7, 21, 39, 0.08);
      --shadow-lg: 0 12px 30px rgba(7, 21, 39, 0.12);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: var(--font-body);
      background-color: #f1f5f9;
      color: var(--slate-800);
      line-height: 1.5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Top Institutional Navigation Bar */
    .portal-navbar {
      background: var(--navy-900);
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      position: sticky;
      top: 0;
      z-index: 1000;
      padding: 0 28px;
      height: 72px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .brand-cluster {
      display: flex;
      align-items: center;
      gap: 14px;
      text-decoration: none;
    }

    .brand-logo-img {
      height: 38px;
      width: auto;
      object-fit: contain;
      border-radius: 8px;
      background: #ffffff;
      padding: 4px 8px;
    }

    .brand-title {
      font-family: var(--font-display);
      font-size: 1.15rem;
      font-weight: 800;
      color: #ffffff;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .brand-badge {
      font-size: 0.65rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      background: rgba(14, 165, 233, 0.2);
      color: var(--blue-400);
      border: 1px solid rgba(14, 165, 233, 0.4);
      padding: 2px 8px;
      border-radius: var(--pill-radius);
    }

    .brand-sub {
      font-size: 0.72rem;
      color: var(--slate-400);
      font-weight: 500;
    }

    .nav-actions {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .status-pill {
      display: flex;
      align-items: center;
      gap: 8px;
      background: rgba(16, 185, 129, 0.12);
      border: 1px solid rgba(16, 185, 129, 0.3);
      padding: 6px 14px;
      border-radius: var(--pill-radius);
      font-size: 0.76rem;
      font-weight: 600;
      color: #34d399;
    }

    .pulse-dot {
      width: 8px;
      height: 8px;
      background: #10b981;
      border-radius: 50%;
    }

    .btn-nav-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.08);
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 7px 14px;
      border-radius: 10px;
      font-size: 0.8rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .btn-nav-link:hover {
      background: rgba(255, 255, 255, 0.18);
      color: #ffffff;
    }

    .btn-nav-logout {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(225, 29, 72, 0.15);
      color: #fda4af;
      border: 1px solid rgba(225, 29, 72, 0.35);
      padding: 7px 14px;
      border-radius: 10px;
      font-size: 0.8rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .btn-nav-logout:hover {
      background: var(--rose-600);
      color: #ffffff;
    }

    .admin-pill {
      display: flex;
      align-items: center;
      gap: 10px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.12);
      padding: 4px 12px 4px 6px;
      border-radius: var(--pill-radius);
      color: #ffffff;
    }

    .admin-avatar {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--blue-600), var(--blue-400));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 0.75rem;
      color: #ffffff;
    }

    /* Main Container */
    .portal-container {
      max-width: 1400px;
      width: 100%;
      margin: 0 auto;
      padding: 28px 24px 60px 24px;
      flex: 1;
    }

    /* Notice Alert */
    .notice-bar {
      background: #ecfdf5;
      border: 1px solid #a7f3d0;
      color: #065f46;
      padding: 12px 20px;
      border-radius: 12px;
      margin-bottom: 24px;
      font-size: 0.88rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Hosting & SLA Plan Duration Card */
    .infra-widget-card {
      background: #ffffff;
      border-radius: var(--card-radius);
      border: 1px solid var(--slate-200);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
      margin-bottom: 28px;
    }

    .infra-header {
      background: linear-gradient(90deg, #f8fafc 0%, #ffffff 100%);
      padding: 18px 24px;
      border-bottom: 1px solid var(--slate-200);
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 14px;
    }

    .infra-header-title {
      font-family: var(--font-display);
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--slate-900);
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .infra-badge {
      background: var(--blue-100);
      color: var(--blue-600);
      font-weight: 700;
      font-size: 0.78rem;
      padding: 4px 12px;
      border-radius: var(--pill-radius);
      border: 1px solid rgba(2, 132, 199, 0.2);
    }

    .infra-progress-area {
      padding: 18px 24px 14px 24px;
      background: #ffffff;
    }

    .progress-meta-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.82rem;
      margin-bottom: 8px;
      color: var(--slate-600);
      font-weight: 600;
    }

    .progress-track {
      width: 100%;
      height: 10px;
      background: var(--slate-100);
      border-radius: var(--pill-radius);
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      background: linear-gradient(90deg, #059669 0%, #10b981 100%);
      border-radius: var(--pill-radius);
    }

    .infra-specs-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
      border-top: 1px solid var(--slate-200);
      background: #fafcff;
    }

    .infra-spec-item {
      padding: 16px 20px;
      border-right: 1px solid var(--slate-200);
    }

    .infra-spec-item:last-child {
      border-right: none;
    }

    .spec-label {
      font-size: 0.72rem;
      text-transform: uppercase;
      font-weight: 700;
      color: var(--slate-400);
      margin-bottom: 4px;
      letter-spacing: 0.04em;
    }

    .spec-value {
      font-size: 0.92rem;
      font-weight: 700;
      color: var(--slate-800);
    }

    /* Real Enquiries KPI Overview Cards */
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin-bottom: 28px;
    }

    .kpi-card {
      background: #ffffff;
      border-radius: var(--card-radius);
      padding: 22px 24px;
      border: 1px solid var(--slate-200);
      box-shadow: var(--shadow-sm);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: all 0.2s ease;
    }

    .kpi-card:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-md);
      border-color: var(--blue-400);
    }

    .kpi-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
    }

    .kpi-title {
      font-size: 0.78rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--slate-500);
    }

    .kpi-icon {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.15rem;
    }

    .icon-blue { background: var(--blue-100); color: var(--blue-600); }
    .icon-amber { background: var(--amber-100); color: var(--amber-600); }
    .icon-purple { background: #ede9fe; color: #7c3aed; }
    .icon-emerald { background: var(--emerald-100); color: var(--emerald-600); }

    .kpi-num {
      font-family: var(--font-display);
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--slate-900);
      line-height: 1.1;
      margin-bottom: 4px;
    }

    .kpi-hint {
      font-size: 0.78rem;
      color: var(--slate-500);
    }

    /* Main Table Panel */
    .table-panel-card {
      background: #ffffff;
      border-radius: var(--card-radius);
      border: 1px solid var(--slate-200);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
    }

    .table-panel-header {
      padding: 22px 28px;
      border-bottom: 1px solid var(--slate-200);
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
    }

    .panel-title-text h2 {
      font-family: var(--font-display);
      font-size: 1.25rem;
      font-weight: 800;
      color: var(--slate-900);
      margin-bottom: 4px;
    }

    .panel-title-text p {
      font-size: 0.82rem;
      color: var(--slate-500);
    }

    .table-filter-bar {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .search-input-box {
      display: flex;
      align-items: center;
      background: var(--slate-50);
      border: 1px solid var(--slate-300);
      border-radius: 10px;
      padding: 8px 14px;
      gap: 10px;
      width: 280px;
    }

    .search-input-box input {
      border: none;
      background: transparent;
      outline: none;
      font-size: 0.85rem;
      color: var(--slate-800);
      width: 100%;
    }

    .inquiries-data-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    .inquiries-data-table th {
      background: var(--slate-50);
      color: var(--slate-500);
      font-size: 0.72rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 14px 20px;
      border-bottom: 1px solid var(--slate-200);
    }

    .inquiries-data-table td {
      padding: 16px 20px;
      border-bottom: 1px solid var(--slate-100);
      font-size: 0.85rem;
      color: var(--slate-700);
      vertical-align: middle;
    }

    .inquiries-data-table tr:hover {
      background: #f8fafc;
    }

    .client-cell {
      display: flex;
      flex-direction: column;
    }

    .client-name {
      font-weight: 700;
      color: var(--slate-900);
      font-size: 0.92rem;
    }

    .client-entity {
      font-size: 0.78rem;
      color: var(--blue-600);
      font-weight: 600;
    }

    .contact-cell {
      display: flex;
      flex-direction: column;
      font-size: 0.8rem;
    }

    .contact-cell a {
      color: inherit;
      text-decoration: none;
    }

    .contact-cell a:hover {
      color: var(--blue-600);
      text-decoration: underline;
    }

    .status-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.75rem;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: var(--pill-radius);
    }

    .badge-Pending { background: #fef3c7; color: #b45309; border: 1px solid #fde68a; }
    .badge-In_Review { background: #eff6ff; color: #1d4ed8; border: 1px solid #bfdbfe; }
    .badge-Contacted { background: #ecfdf5; color: #047857; border: 1px solid #a7f3d0; }
    .badge-Closed { background: #f1f5f9; color: #475569; border: 1px solid #cbd5e1; }

    .action-group {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 8px;
    }

    .btn-action-view {
      background: #f1f5f9;
      border: 1px solid var(--slate-300);
      color: var(--slate-700);
      padding: 6px 12px;
      border-radius: 8px;
      font-size: 0.78rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.15s ease;
    }

    .btn-action-view:hover {
      background: var(--blue-50);
      border-color: var(--blue-400);
      color: var(--blue-600);
    }

    .status-select-form select {
      padding: 6px 10px;
      border-radius: 8px;
      border: 1px solid var(--slate-300);
      font-size: 0.78rem;
      font-weight: 600;
      color: var(--slate-700);
      background: #ffffff;
      outline: none;
      cursor: pointer;
    }

    .btn-action-del {
      background: transparent;
      border: none;
      color: var(--slate-400);
      padding: 6px 8px;
      cursor: pointer;
      font-size: 0.85rem;
      transition: color 0.15s ease;
    }

    .btn-action-del:hover {
      color: var(--rose-600);
    }

    /* Empty State Card */
    .empty-state-panel {
      padding: 60px 24px;
      text-align: center;
    }

    .empty-icon-wrap {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: var(--blue-50);
      color: var(--blue-600);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      margin-bottom: 16px;
    }

    .empty-title {
      font-family: var(--font-display);
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--slate-900);
      margin-bottom: 6px;
    }

    .empty-desc {
      font-size: 0.88rem;
      color: var(--slate-500);
      max-width: 520px;
      margin: 0 auto 24px auto;
      line-height: 1.6;
    }

    .btn-test-contact {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--blue-600);
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 10px;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
    }

    .btn-test-contact:hover {
      background: #0369a1;
      color: #ffffff;
    }

    /* Modal System */
    .portal-modal-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(7, 21, 39, 0.75);
      backdrop-filter: blur(6px);
      z-index: 2000;
      display: none;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .portal-modal-backdrop.show {
      display: flex;
    }

    .portal-modal-card {
      background: #ffffff;
      border-radius: 20px;
      width: 100%;
      max-width: 620px;
      box-shadow: var(--shadow-lg);
      border: 1px solid var(--slate-200);
      overflow: hidden;
    }

    .modal-head {
      background: var(--navy-900);
      color: #ffffff;
      padding: 20px 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .modal-head h3 {
      font-family: var(--font-display);
      font-size: 1.15rem;
      font-weight: 700;
    }

    .modal-close-btn {
      background: rgba(255, 255, 255, 0.1);
      border: none;
      color: #ffffff;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
    }

    .modal-body {
      padding: 24px;
      max-height: 75vh;
      overflow-y: auto;
    }

    .modal-field {
      margin-bottom: 16px;
    }

    .modal-field-label {
      font-size: 0.72rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--slate-400);
      margin-bottom: 4px;
    }

    .modal-field-val {
      font-size: 0.92rem;
      font-weight: 600;
      color: var(--slate-800);
    }

    .modal-msg-box {
      background: var(--slate-50);
      border: 1px solid var(--slate-200);
      border-radius: 12px;
      padding: 16px;
      font-size: 0.88rem;
      line-height: 1.6;
      color: var(--slate-700);
      white-space: pre-wrap;
    }

    .modal-foot {
      padding: 16px 24px;
      background: var(--slate-50);
      border-top: 1px solid var(--slate-200);
      display: flex;
      justify-content: flex-end;
    }

    .btn-modal-close {
      background: #ffffff;
      border: 1px solid var(--slate-300);
      color: var(--slate-700);
      padding: 8px 18px;
      border-radius: 10px;
      font-weight: 600;
      font-size: 0.85rem;
      cursor: pointer;
    }

    /* Footer */
    .portal-footer {
      background: #ffffff;
      border-top: 1px solid var(--slate-200);
      padding: 20px 28px;
      font-size: 0.8rem;
      color: var(--slate-500);
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 12px;
    }
  </style>
</head>
<body>

  <!-- Top Institutional Navigation Bar -->
  <header class="portal-navbar">
    <a href="index.php" class="brand-cluster">
      <img src="../assets/logo.png" alt="Senapathi Alliance Crest" class="brand-logo-img" onerror="this.onerror=null; this.src='../assets/images/logo.jpeg'">
      <div>
        <div class="brand-title">
          Senapathi Alliance
          <span class="brand-badge">Admin Portal</span>
        </div>
        <div class="brand-sub">Corporate &amp; Government Advisory | Database Inquiries Engine</div>
      </div>
    </a>

    <div class="nav-actions">
      <!-- Database Status -->
      <div class="status-pill">
        <span class="pulse-dot"></span>
        <span>MySQL Database Active</span>
      </div>

      <!-- Public Site Link -->
      <a href="../index.php" target="_blank" class="btn-nav-link">
        <i class="fa-solid fa-arrow-up-right-from-square"></i>
        <span>Public Portal</span>
      </a>

      <!-- Admin Profile Pill -->
      <div class="admin-pill">
        <div class="admin-avatar">
          <?= strtoupper(substr($adminUser['name'] ?? 'AD', 0, 2)) ?>
        </div>
        <div>
          <div style="font-size:0.82rem; font-weight:700;"><?= htmlspecialchars($adminUser['name'] ?? 'Administrator') ?></div>
          <div style="font-size:0.68rem; color:var(--blue-400);"><?= htmlspecialchars($adminUser['email'] ?? 'admin@senapathi.co.in') ?></div>
        </div>
      </div>

      <!-- Sign Out Button -->
      <a href="logout.php" class="btn-nav-logout" title="Sign Out of Session">
        <i class="fa-solid fa-power-off"></i>
        <span>Sign Out</span>
      </a>
    </div>
  </header>

  <main class="portal-container">

    <!-- Action Notice Bar if redirected -->
    <?php if (isset($_GET['msg']) && $_GET['msg'] === 'updated'): ?>
      <div class="notice-bar">
        <i class="fa-solid fa-circle-check"></i>
        <span>Inquiry status has been updated successfully in the database.</span>
      </div>
    <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'deleted'): ?>
      <div class="notice-bar" style="background:#fef2f2; border-color:#fecaca; color:#991b1b;">
        <i class="fa-solid fa-trash-can"></i>
        <span>Inquiry has been deleted from the database.</span>
      </div>
    <?php endif; ?>

    <!-- Institutional SLA & Hosting Infrastructure Status Widget -->
    <section class="infra-widget-card">
      <div class="infra-header">
        <div class="infra-header-title">
          <i class="fa-solid fa-shield-halved text-success"></i>
          <span>Institutional Digital Infrastructure &amp; Production SLA</span>
        </div>
        <div class="infra-badge">
          <i class="fa-solid fa-clock mr-1"></i> <?= $diffRemaining ?> Days Active in Annual Cycle
        </div>
      </div>

      <div class="infra-progress-area">
        <div class="progress-meta-row">
          <span>Active Service Plan (Cycle: <strong><?= date('d M, Y', strtotime($startDate)) ?></strong> &mdash; <strong><?= date('d M, Y', strtotime($expiryDate)) ?></strong>)</span>
          <span><strong><?= $progressPercent ?>%</strong> Completed (<?= $diffPassed ?> of <?= $diffTotal ?> Days)</span>
        </div>
        <div class="progress-track">
          <div class="progress-fill" style="width: <?= $progressPercent ?>%;"></div>
        </div>
      </div>

      <div class="infra-specs-grid">
        <div class="infra-spec-item">
          <div class="spec-label">Domain Property</div>
          <div class="spec-value text-primary"><i class="fa-solid fa-globe mr-1"></i> senapathi.co.in</div>
        </div>
        <div class="infra-spec-item">
          <div class="spec-label">Registrar Partner</div>
          <div class="spec-value">Hostinger Enterprise</div>
        </div>
        <div class="infra-spec-item">
          <div class="spec-label">Production Hosting</div>
          <div class="spec-value"><span style="background:#e0f2fe; color:#0284c7; padding:2px 8px; border-radius:6px; font-weight:700;">cPanel Cloud</span></div>
        </div>
        <div class="infra-spec-item">
          <div class="spec-label">Static IP Node</div>
          <div class="spec-value text-muted font-monospace">148.113.35.192</div>
        </div>
        <div class="infra-spec-item">
          <div class="spec-label">Lead Web Developer</div>
          <div class="spec-value">Rahul Dhiman</div>
        </div>
        <div class="infra-spec-item">
          <div class="spec-label">Support Contact</div>
          <div class="spec-value"><a href="tel:+918059982049" style="color:inherit; text-decoration:none;"><i class="fa-solid fa-phone mr-1"></i> +91-8059982049</a></div>
        </div>
      </div>
    </section>

    <!-- Real Database Counters (KPI Cards) -->
    <section class="kpi-grid">
      <!-- Total Inquiries -->
      <div class="kpi-card">
        <div class="kpi-top">
          <span class="kpi-title">Total Inquiries Received</span>
          <div class="kpi-icon icon-blue">
            <i class="fa-solid fa-inbox"></i>
          </div>
        </div>
        <div>
          <div class="kpi-num"><?= $totalInquiries ?></div>
          <div class="kpi-hint">Total public consultations &amp; RFPs</div>
        </div>
      </div>

      <!-- Pending / Action Required -->
      <div class="kpi-card">
        <div class="kpi-top">
          <span class="kpi-title">Pending Action</span>
          <div class="kpi-icon icon-amber">
            <i class="fa-solid fa-clock"></i>
          </div>
        </div>
        <div>
          <div class="kpi-num"><?= $pendingInquiries ?></div>
          <div class="kpi-hint">Awaiting partner review</div>
        </div>
      </div>

      <!-- In Review -->
      <div class="kpi-card">
        <div class="kpi-top">
          <span class="kpi-title">Under Review</span>
          <div class="kpi-icon icon-purple">
            <i class="fa-solid fa-hourglass-half"></i>
          </div>
        </div>
        <div>
          <div class="kpi-num"><?= $inReviewInquiries ?></div>
          <div class="kpi-hint">Proposal drafting in progress</div>
        </div>
      </div>

      <!-- Contacted / Resolved -->
      <div class="kpi-card">
        <div class="kpi-top">
          <span class="kpi-title">Contacted / Engaged</span>
          <div class="kpi-icon icon-emerald">
            <i class="fa-solid fa-circle-check"></i>
          </div>
        </div>
        <div>
          <div class="kpi-num"><?= $contactedInquiries ?></div>
          <div class="kpi-hint">Client consultation scheduled</div>
        </div>
      </div>
    </section>

    <!-- Real Inquiries Data Table Panel -->
    <section class="table-panel-card">
      <div class="table-panel-header">
        <div class="panel-title-text">
          <h2>Submitted Client Enquiries &amp; RFP Requests</h2>
          <p>Real-time inquiries captured from the website contact &amp; consultation form</p>
        </div>

        <?php if (!empty($enquiriesList)): ?>
          <div class="table-filter-bar">
            <div class="search-input-box">
              <i class="fa-solid fa-magnifying-glass text-muted"></i>
              <input type="text" id="enquirySearchInput" placeholder="Filter by name, entity, email..." onkeyup="filterEnquiriesTable()">
            </div>
          </div>
        <?php endif; ?>
      </div>

      <?php if (empty($enquiriesList)): ?>
        <!-- Empty State When No Enquiries Have Been Submitted -->
        <div class="empty-state-panel">
          <div class="empty-icon-wrap">
            <i class="fa-solid fa-inbox"></i>
          </div>
          <h3 class="empty-title">No Inquiries Submitted Yet</h3>
          <p class="empty-desc">
            When visitors submit the consultation or RFP request form on the public website (<a href="../index.php#contact" target="_blank" style="color:var(--blue-600); font-weight:600;">senapathi.co.in/#contact</a>), their submissions will appear here in real time.
          </p>
          <a href="../index.php#contact" target="_blank" class="btn-test-contact">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Test Contact Form Submission</span>
          </a>
        </div>
      <?php else: ?>
        <div style="overflow-x: auto;">
          <table class="inquiries-data-table" id="enquiriesTable">
            <thead>
              <tr>
                <th style="width: 70px;">Ref ID</th>
                <th>Client Name &amp; Entity</th>
                <th>Contact Details</th>
                <th>Service Vertical</th>
                <th>Submission Date</th>
                <th>Status</th>
                <th style="text-align: right;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($enquiriesList as $enq): ?>
                <?php 
                  $statusClean = str_replace(' ', '_', $enq['status']);
                  $refId = 'RFP-' . date('Y', strtotime($enq['created_at'])) . '-' . str_pad($enq['id'], 3, '0', STR_PAD_LEFT);
                ?>
                <tr>
                  <td>
                    <span style="font-weight:700; color:var(--blue-600); font-family:monospace;"><?= $refId ?></span>
                  </td>
                  <td>
                    <div class="client-cell">
                      <span class="client-name"><?= htmlspecialchars($enq['name']) ?></span>
                      <span class="client-entity"><?= htmlspecialchars($enq['entity_name']) ?></span>
                    </div>
                  </td>
                  <td>
                    <div class="contact-cell">
                      <a href="mailto:<?= htmlspecialchars($enq['email']) ?>" title="Send Email">
                        <i class="fa-solid fa-envelope mr-1 text-muted"></i> <?= htmlspecialchars($enq['email']) ?>
                      </a>
                      <a href="tel:<?= htmlspecialchars($enq['phone']) ?>" title="Call Client">
                        <i class="fa-solid fa-phone mr-1 text-muted"></i> <?= htmlspecialchars($enq['phone']) ?>
                      </a>
                    </div>
                  </td>
                  <td>
                    <span style="font-weight:600; color:var(--slate-800);"><?= htmlspecialchars($enq['service_line']) ?></span>
                  </td>
                  <td>
                    <span style="font-size:0.8rem; font-weight:600; color:var(--slate-600);">
                      <?= date('d M Y, h:i A', strtotime($enq['created_at'])) ?>
                    </span>
                  </td>
                  <td>
                    <form method="POST" action="index.php" class="status-select-form">
                      <input type="hidden" name="action" value="update_status">
                      <input type="hidden" name="enquiry_id" value="<?= $enq['id'] ?>">
                      <select name="new_status" onchange="this.form.submit()" class="badge-<?= $statusClean ?>">
                        <option value="Pending" <?= $enq['status'] === 'Pending' ? 'selected' : '' ?>>Pending</option>
                        <option value="In Review" <?= $enq['status'] === 'In Review' ? 'selected' : '' ?>>In Review</option>
                        <option value="Contacted" <?= $enq['status'] === 'Contacted' ? 'selected' : '' ?>>Contacted</option>
                        <option value="Closed" <?= $enq['status'] === 'Closed' ? 'selected' : '' ?>>Closed</option>
                      </select>
                    </form>
                  </td>
                  <td style="text-align: right;">
                    <div class="action-group">
                      <button 
                        type="button" 
                        class="btn-action-view" 
                        onclick="openBriefModal('<?= $refId ?>', '<?= htmlspecialchars($enq['name'], ENT_QUOTES) ?>', '<?= htmlspecialchars($enq['entity_name'], ENT_QUOTES) ?>', '<?= htmlspecialchars($enq['email'], ENT_QUOTES) ?>', '<?= htmlspecialchars($enq['phone'], ENT_QUOTES) ?>', '<?= htmlspecialchars($enq['service_line'], ENT_QUOTES) ?>', '<?= htmlspecialchars($enq['message'] ?? 'No additional comments provided.', ENT_QUOTES) ?>', '<?= htmlspecialchars($enq['status'], ENT_QUOTES) ?>', '<?= date('d M Y, h:i A', strtotime($enq['created_at'])) ?>')"
                      >
                        <i class="fa-solid fa-eye"></i> View Brief
                      </button>

                      <form method="POST" action="index.php" onsubmit="return confirm('Are you sure you want to permanently delete this inquiry?');" style="display:inline;">
                        <input type="hidden" name="action" value="delete_enquiry">
                        <input type="hidden" name="enquiry_id" value="<?= $enq['id'] ?>">
                        <button type="submit" class="btn-action-del" title="Delete Inquiry">
                          <i class="fa-solid fa-trash-can"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </section>

  </main>

  <!-- Inquiry Details View Modal -->
  <div class="portal-modal-backdrop" id="inquiryBriefModal">
    <div class="portal-modal-card">
      <div class="modal-head">
        <div>
          <span style="font-size: 0.72rem; color: var(--blue-400); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;" id="modalRefId">INQUIRY BRIEF</span>
          <h3 id="modalClientTitle">Client Inquiry Details</h3>
        </div>
        <button type="button" class="modal-close-btn" onclick="closeBriefModal()">&times;</button>
      </div>
      <div class="modal-body">
        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:16px;">
          <div class="modal-field">
            <div class="modal-field-label">Entity / Department</div>
            <div class="modal-field-val" id="modalEntity"></div>
          </div>
          <div class="modal-field">
            <div class="modal-field-label">Primary Service Vertical</div>
            <div class="modal-field-val text-primary" id="modalService"></div>
          </div>
        </div>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:16px;">
          <div class="modal-field">
            <div class="modal-field-label">Official Work Email</div>
            <div class="modal-field-val"><a id="modalEmail" href="#" style="color:var(--blue-600); text-decoration:none;"></a></div>
          </div>
          <div class="modal-field">
            <div class="modal-field-label">Contact Phone</div>
            <div class="modal-field-val" id="modalPhone"></div>
          </div>
        </div>

        <div class="modal-field">
          <div class="modal-field-label">Submission Date &amp; Time</div>
          <div class="modal-field-val" id="modalDate"></div>
        </div>

        <div class="modal-field">
          <div class="modal-field-label">Assignment Context / RFP Scope Overview</div>
          <div class="modal-msg-box" id="modalMessage"></div>
        </div>
      </div>
      <div class="modal-foot">
        <button type="button" class="btn-modal-close" onclick="closeBriefModal()">Close Brief</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="portal-footer">
    <div>
      &copy; <?= date('Y') ?> <strong>Senapathi Alliance</strong> &mdash; Corporate &amp; Government Advisory.
    </div>
    <div>
      Database: <code>senapathi_db</code> &bull; Authenticated Admin: <strong><?= htmlspecialchars($adminUser['email']) ?></strong>
    </div>
  </footer>

  <script>
    // Live filter inquiries table
    function filterEnquiriesTable() {
      const input = document.getElementById("enquirySearchInput");
      if (!input) return;
      const filter = input.value.toLowerCase();
      const table = document.getElementById("enquiriesTable");
      const tr = table.getElementsByTagName("tr");

      for (let i = 1; i < tr.length; i++) {
        const textContent = tr[i].textContent || tr[i].innerText;
        if (textContent.toLowerCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }

    // Modal popup
    function openBriefModal(refId, name, entity, email, phone, service, message, status, date) {
      document.getElementById("modalRefId").innerText = refId + " &bull; Status: " + status;
      document.getElementById("modalClientTitle").innerText = name;
      document.getElementById("modalEntity").innerText = entity;
      document.getElementById("modalService").innerText = service;
      const mailEl = document.getElementById("modalEmail");
      mailEl.innerText = email;
      mailEl.href = "mailto:" + email;
      document.getElementById("modalPhone").innerText = phone;
      document.getElementById("modalDate").innerText = date;
      document.getElementById("modalMessage").innerText = message;

      document.getElementById("inquiryBriefModal").classList.add("show");
    }

    function closeBriefModal() {
      document.getElementById("inquiryBriefModal").classList.remove("show");
    }

    window.onclick = function(event) {
      const modal = document.getElementById("inquiryBriefModal");
      if (event.target === modal) {
        closeBriefModal();
      }
    };
  </script>

</body>
</html>
