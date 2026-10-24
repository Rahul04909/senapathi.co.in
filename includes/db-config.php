<?php
/**
 * Senapathi Alliance - Master Database Configuration
 * Corporate & Government Advisory Portal
 */

if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_USER')) define('DB_USER', 'jghfrodu_senapathi');
if (!defined('DB_PASS')) define('DB_PASS', 'Rd14072003@./');
if (!defined('DB_NAME')) define('DB_NAME', 'jghfrodu_senapathi');

$GLOBALS['db_connection_error'] = '';

/**
 * Get or initialize PDO database connection
 * 
 * @return PDO|null
 */
function get_db_connection() {
    static $pdoInstance = null;
    
    if ($pdoInstance !== null) {
        return $pdoInstance;
    }

    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $pdoInstance = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
        return $pdoInstance;
    } catch (Throwable $e) {
        $GLOBALS['db_connection_error'] = $e->getMessage();
        error_log("Database Connection Error: " . $e->getMessage());
        return null;
    }
}

// Global $pdo instance for backward & direct compatibility
$pdo = get_db_connection();
