<?php
/**
 * Senapathi Alliance - Environment Configuration Loader
 * Loads .env configuration using vlucas/phpdotenv with safe native fallback
 */

if (!function_exists('env')) {
    /**
     * Retrieve an environment variable with default fallback
     * 
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function env($key, $default = null) {
        $val = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
        if ($val === false || $val === null || $val === '') {
            return $default;
        }
        $lower = strtolower(trim((string)$val));
        if ($lower === 'true' || $lower === '(true)') return true;
        if ($lower === 'false' || $lower === '(false)') return false;
        if ($lower === 'null' || $lower === '(null)') return null;
        return $val;
    }
}

// 1. Require Composer Autoloader if present
$autoloadPath = dirname(__DIR__) . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

// 2. Load .env using vlucas/phpdotenv if class is available
$rootDir = dirname(__DIR__);
$envFile = $rootDir . '/.env';

if (file_exists($envFile)) {
    if (class_exists('Dotenv\Dotenv')) {
        try {
            $dotenv = Dotenv\Dotenv::createImmutable($rootDir);
            $dotenv->safeLoad();
        } catch (Throwable $e) {
            error_log("Dotenv safeLoad notice: " . $e->getMessage());
        }
    } else {
        // Safe native fallback parser if Composer autoloader is bypassed
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines !== false) {
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line === '' || strpos($line, '#') === 0) continue;
                if (strpos($line, '=') !== false) {
                    list($key, $val) = explode('=', $line, 2);
                    $key = trim($key);
                    $val = trim($val);
                    $val = trim($val, "\"'");
                    if (!isset($_ENV[$key])) $_ENV[$key] = $val;
                    if (!isset($_SERVER[$key])) $_SERVER[$key] = $val;
                    putenv("$key=$val");
                }
            }
        }
    }
}
