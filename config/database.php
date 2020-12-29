<?php
const DSN = 'mysql:dbname=todo;host=127.0.0.1';
const USER = 'root';
const PASS = 'as14511451';
try {
    $dbh = new PDO(DSN, USER, PASS);
    // echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>