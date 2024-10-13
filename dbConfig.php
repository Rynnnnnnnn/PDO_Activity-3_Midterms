<?php  
// Database Configuration Code

$host = "localhost";
$user = "root";
$password = "";
$dbname = "martinez";

// Data Source Name (DSN)
$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

try {
    // Create a PDO instance (connect to the database)
    $pdo = new PDO($dsn, $user, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    echo "Database connection successful!";
} catch (PDOException $e) {
    // Catch and display any connection errors
    die("Database connection failed: " . $e->getMessage());
}
?>
