<?php
/**
 * Senapathi Alliance - Executive Advisory Administration Portal
 * Admin Login Interface
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// If already authenticated, redirect to dashboard
if (isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit();
}

require_once __DIR__ . '/../includes/db-config.php';

$errorMessage = '';
$emailInput = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailInput = trim($_POST['email'] ?? '');
    $passwordInput = trim($_POST['password'] ?? '');

    if (empty($emailInput) || empty($passwordInput)) {
        $errorMessage = "Please enter both official email and password.";
    } elseif (!$pdo) {
        $errorMessage = "Database connection unavailable. Please ensure MySQL is running.";
    } else {
        try {
            $stmt = $pdo->prepare("SELECT * FROM `admins` WHERE `email` = ? LIMIT 1");
            $stmt->execute([$emailInput]);
            $admin = $stmt->fetch();

            if ($admin && password_verify($passwordInput, $admin['password'])) {
                // Successful authentication
                $_SESSION['admin_user'] = [
                    'id'    => $admin['id'],
                    'name'  => $admin['name'],
                    'email' => $admin['email'],
                    'role'  => $admin['role'] ?? 'Super Administrator',
                    'login_time' => time()
                ];
                header("Location: index.php");
                exit();
            } else {
                $errorMessage = "Invalid credentials. Please verify your email and password.";
            }
        } catch (Throwable $e) {
            $errorMessage = "Authentication error: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Executive Admin Login | Senapathi Alliance</title>
  <link rel="icon" type="image/png" href="../assets/logo.png">

  <!-- Google Fonts: Outfit & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>
    :root {
      --navy-950: #040d1a;
      --navy-900: #071527;
      --navy-800: #0b2545;
      --blue-600: #0284c7;
      --blue-500: #0ea5e9;
      --slate-800: #1e293b;
      --slate-600: #475569;
      --slate-400: #94a3b8;
      --slate-200: #e2e8f0;
      --slate-50:  #f8fafc;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: radial-gradient(circle at 50% 20%, #0b2545 0%, #071527 60%, #040d1a 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 24px;
      color: #ffffff;
      position: relative;
      overflow-x: hidden;
    }

    /* Ambient background graphics */
    .bg-glow {
      position: absolute;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(14, 165, 233, 0.15) 0%, rgba(2, 132, 199, 0) 70%);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      pointer-events: none;
      z-index: 1;
    }

    .login-container {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 440px;
    }

    .brand-header {
      text-align: center;
      margin-bottom: 28px;
    }

    .brand-logo-wrap {
      display: inline-block;
      background: #ffffff;
      padding: 8px 16px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.35);
      margin-bottom: 16px;
    }

    .brand-logo-wrap img {
      height: 48px;
      width: auto;
      display: block;
    }

    .brand-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.6rem;
      font-weight: 800;
      letter-spacing: -0.01em;
      margin-bottom: 4px;
    }

    .brand-sub {
      color: var(--slate-400);
      font-size: 0.85rem;
      font-weight: 500;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 20px;
      padding: 36px 32px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.45);
    }

    .form-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      margin-bottom: 6px;
      color: #ffffff;
    }

    .form-desc {
      font-size: 0.82rem;
      color: var(--slate-400);
      margin-bottom: 24px;
    }

    .alert-error {
      background: rgba(225, 29, 72, 0.15);
      border: 1px solid rgba(225, 29, 72, 0.4);
      color: #fecdd3;
      padding: 12px 14px;
      border-radius: 10px;
      font-size: 0.82rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      font-size: 0.78rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--slate-300);
      margin-bottom: 8px;
    }

    .input-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-icon {
      position: absolute;
      left: 14px;
      color: var(--slate-400);
      font-size: 0.95rem;
      pointer-events: none;
    }

    .form-input {
      width: 100%;
      background: rgba(15, 23, 42, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 12px 14px 12px 42px;
      border-radius: 12px;
      font-size: 0.92rem;
      color: #ffffff;
      outline: none;
      transition: all 0.25s ease;
      font-family: 'Inter', sans-serif;
    }

    .form-input:focus {
      border-color: var(--blue-500);
      background: rgba(15, 23, 42, 0.85);
      box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.25);
    }

    .toggle-pass-btn {
      position: absolute;
      right: 14px;
      background: transparent;
      border: none;
      color: var(--slate-400);
      cursor: pointer;
      font-size: 0.9rem;
    }

    .toggle-pass-btn:hover {
      color: #ffffff;
    }

    .btn-submit {
      width: 100%;
      background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-500) 100%);
      color: #ffffff;
      border: none;
      padding: 14px;
      border-radius: 12px;
      font-size: 0.95rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      box-shadow: 0 10px 25px rgba(2, 132, 199, 0.35);
      transition: all 0.25s ease;
      margin-top: 10px;
    }

    .btn-submit:hover {
      background: linear-gradient(135deg, #0369a1 0%, var(--blue-600) 100%);
      transform: translateY(-2px);
      box-shadow: 0 14px 30px rgba(2, 132, 199, 0.45);
    }

    /* Helper badge */
    .credentials-hint {
      margin-top: 24px;
      background: rgba(2, 132, 199, 0.12);
      border: 1px dashed rgba(56, 189, 248, 0.35);
      border-radius: 12px;
      padding: 12px 14px;
      font-size: 0.78rem;
      color: var(--slate-300);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .credentials-hint code {
      color: #38bdf8;
      font-weight: 700;
      font-family: monospace;
      font-size: 0.82rem;
    }

    .back-link {
      text-align: center;
      margin-top: 24px;
    }

    .back-link a {
      color: var(--slate-400);
      text-decoration: none;
      font-size: 0.82rem;
      font-weight: 500;
      transition: color 0.2s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .back-link a:hover {
      color: #ffffff;
    }
  </style>
</head>
<body>

  <div class="bg-glow"></div>

  <div class="login-container">
    <div class="brand-header">
      <div class="brand-logo-wrap">
        <img src="../assets/logo.png" alt="Senapathi Alliance Crest" onerror="this.src='../assets/images/logo.jpeg'">
      </div>
      <h1 class="brand-title">Senapathi Alliance</h1>
      <p class="brand-sub">Executive Advisory Administration Portal</p>
    </div>

    <div class="login-card">
      <h2 class="form-title">Administrator Sign In</h2>
      <p class="form-desc">Enter your authorized credentials to access advisory operations.</p>

      <?php if (!empty($errorMessage)): ?>
        <div class="alert-error">
          <i class="fa-solid fa-triangle-exclamation"></i>
          <span><?= htmlspecialchars($errorMessage) ?></span>
        </div>
      <?php endif; ?>

      <form method="POST" action="login.php" autocomplete="off">
        <div class="form-group">
          <label for="email" class="form-label">Official Work Email</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-envelope input-icon"></i>
            <input 
              type="email" 
              id="email" 
              name="email" 
              class="form-input" 
              placeholder="admin@senapathi.co.in" 
              value="<?= htmlspecialchars($emailInput) ?>" 
              required 
              autofocus
            >
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-lock input-icon"></i>
            <input 
              type="password" 
              id="password" 
              name="password" 
              class="form-input" 
              placeholder="••••••••••••" 
              required
            >
            <button type="button" class="toggle-pass-btn" onclick="togglePasswordVisibility()" title="Show/Hide Password">
              <i class="fa-solid fa-eye" id="togglePassIcon"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="btn-submit">
          <span>Sign In to Advisory Portal</span>
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>

      <!-- Credentials Quick Reference for testing/admin -->
      <div class="credentials-hint">
        <div>
          <i class="fa-solid fa-circle-info mr-1 text-info"></i>
          <span>Login: <code>admin@senapathi.co.in</code></span>
        </div>
        <div>
          <span>Pass: <code>Admin@123</code></span>
        </div>
      </div>
    </div>

    <div class="back-link">
      <a href="../index.php">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Return to Public Website</span>
      </a>
    </div>
  </div>

  <script>
    function togglePasswordVisibility() {
      const passInput = document.getElementById("password");
      const icon = document.getElementById("togglePassIcon");
      if (passInput.type === "password") {
        passInput.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        passInput.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    }
  </script>

</body>
</html>
