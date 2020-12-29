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

$sql_user = 'select * from user';
$prepare_user = $dbh->prepare($sql_user);
$prepare_user->execute();
$result_user = $prepare_user->fetchAll(pdo::FETCH_ASSOC);

$sql_todos = 'select * from todos';
$prepare_todos = $dbh->prepare($sql_todos);
$prepare_todos->execute();
$result_todos = $prepare_todos->fetchAll(pdo::FETCH_ASSOC);

?>