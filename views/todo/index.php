<?php
require_once(dirname(__FILE__, 3).'/controllers/TodoController.php');
$controller = new TodoController;
$todos = $controller->index();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>一覧画面</title>
</head>
<body>
  <p>一覧画面</p>
  <ul>
    <?php for($i = 0; $i < count($todos); $i++): ?>
      <li>
        <input type="checkbox">
        <a href='./detail.php?id=<?php echo $todos[$i]['id'] ?>'>
          <?php echo $todos[$i]['title'] ?>
        </a>
      </li>
    <?php endfor; ?>
  </ul>
</body>
</html>