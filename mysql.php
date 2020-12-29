<?php
require_once('config/database.php');
$sql_user = 'select * from user';
$prepare_user = $dbh->prepare($sql_user);
$prepare_user->execute();
$result_user = $prepare_user->fetchAll(pdo::FETCH_ASSOC);

$sql_todos = 'select * from todos';
$prepare_todos = $dbh->prepare($sql_todos);
$prepare_todos->execute();
$result_todos = $prepare_todos->fetchAll(pdo::FETCH_ASSOC);

?>