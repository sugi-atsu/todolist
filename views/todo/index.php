<?php
require_once(dirname(__FILE__, 3).'/models/Todo.php');
$controller = new Todo;
$controller->findAll();
// $user = $controller->user;
$todos = $controller->todos;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>todoリスト</title>
</head>
<body>
  <!-- <p class="title">userテーブル</p> -->
  <!-- <ul class="user">
    <?php for($i = 0; $i < count($user); $i++): ?>
      <?php foreach($user[$i] as $key=>$value): ?>
        <li><?php echo "${key} : ${value}"; ?></li>
      <?php endforeach; ?>
      <br>
      <?php endfor; ?>
  </ul> -->

  <p class="title">todosテーブル</p>
  <ul class="todos">
    <?php for($i = 0; $i < count($todos); $i++):?>
      <?php foreach($todos[$i] as $key=>$value): ?>
        <li><?php echo "${key} : ${value}"; ?></li>
        <?php endforeach;?>
      <br>
      <?php endfor; ?>
  </ul>
</body>
</html>