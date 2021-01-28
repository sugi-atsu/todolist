<?php
require_once(dirname(__FILE__, 3).'/controllers/TodoController.php');
$controller = new TodoController;
$todo = $controller->detail();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規作成</title>
</head>
<body>
  <p>詳細画面</p>
  <ul>
    <li><?php echo $todo['title'];?></li>
    <li><?php echo $todo['text'];?></li>
  </ul>
</body>
</html>