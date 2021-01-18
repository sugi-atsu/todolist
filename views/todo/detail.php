<?php
require_once(dirname(__FILE__, 3).'/controllers/TodoController.php');
require_once(dirname(__FILE__, 3).'/models/TodoModel.php');
$id = $_GET['id'];
$controller = new TodoController;
$todo = $controller->getDetail($id);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>詳細画面</title>
</head>
<body>
  <p>詳細画面</p>
  <ul>
    <?php for($i = 0; $i < count($todo); $i++) :?>
        <?php foreach($todo[$i] as $key => $value): ?>
            <li><?php echo "${key} : ${value}"; ?></li>
        <?php endforeach ?>
    <?php endfor ?>
  </ul>
</body>
</html>