<?php
require_once(dirname(__FILE__, 3).'/controllers/TodoController.php');
$controller = new TodoController;
$todos = $controller->index();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller = new TodoController;
    $controller->edit();
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
  <title>編集</title>
</head>
<body>
    <p>編集画面</p>
    <form action="./edit.php" method="POST">
        <p>タイトル</p>
        <input type="text" name="title">
        <p>本文</p>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="hidden" name="todo_id" value="<?php echo $_GET['todo_id']?>">
        <button type="submit">更新</button>
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