<?php
$dsn = 'mysql:dbname=todo;host=127.0.0.1';
$user = 'root';
$pass = 'as14511451';
try {
    $dbh = new PDO($dsn, $user, $pass);
    // echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>