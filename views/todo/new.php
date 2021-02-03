<?php
require_once(dirname(__FILE__, 3).'/controllers/TodoController.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller = new TodoController;
    $controller->new();
    header('Location: ./index.php');
    exit;
}
session_start();
$errorMsgs = $_SESSION['errorMsgs'];
unset($_SESSION['errorMsgs']);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規作成</title>
</head>
<body>
    <p>新規作成画面</p>
    <form action="./new.php" method="POST">
        <p>タイトル</p>
        <input type="text" name="title">
        <p>本文</p>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <button type="submit">新規作成</button>
    </form>
    <?php if(isset($errorMsgs)) : ?>
        <ul>
            <?php foreach($errorMsgs as $errorMsg): ?>
                <li><?php echo $errorMsg;?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif ; ?>
</body>
</html>