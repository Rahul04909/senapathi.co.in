<?php
/**
 * Senapathi Alliance - Master Database Configuration
 * Corporate & Government Advisory Portal
 */

if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_USER')) define('DB_USER', 'jghfrodu_senapathi');
if (!defined('DB_PASS')) define('DB_PASS', 'jghfrodu_senapathi');
if (!defined('DB_NAME')) define('DB_NAME', 'Rd14072003@./');

/**
 * Get or initialize PDO database connection
 * Auto-creates the database if it doesn't already exist on MySQL server
 * 
 * @return PDO|null
 */
function get_db_connection() {
    static $pdoInstance = null;
    
    if ($pdoInstance !== null) {
        return $pdoInstance;
    }

    try {
        // Attempt direct connection to the database
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $pdoInstance = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
        return $pdoInstance;
    } catch (PDOException $e) {
        // Error 1049: Unknown database -> attempt auto-creation
        try {
            $serverPdo = new PDO("mysql:host=" . DB_HOST . ";charset=utf8mb4", DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
            $serverPdo->exec("CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            
            // Connect to the newly created database
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $pdoInstance = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
            return $pdoInstance;
        } catch (Throwable $ex) {
            // Log or fallback gracefully if MySQL is offline
            error_log("Database Connection Error: " . $ex->getMessage());
            return null;
        }
    } catch (Throwable $e) {
        error_log("Database Error: " . $e->getMessage());
        return null;
    }
}

// Global $pdo instance for backward & direct compatibility
$pdo = get_db_connection();
