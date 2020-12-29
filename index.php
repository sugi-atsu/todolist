<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php require_once('mysql.php'); ?>
  <p class="title">userテーブル</p>
  <ul class="user_table">
    <?php for($i = 0; $i < count($result_user); $i++){
      foreach($result_user[$i] as $key=>$value){
        ?><li><?php echo "${key} : ${value}"; ?></li><?php
      }
      ?><br><?php
    } ?>
  </ul>

  <p class="title">todosテーブル</p>
  <ul class="todos_table">
    <?php for($i = 0; $i < count($result_todos); $i++){
      foreach($result_todos[$i] as $key=>$value){
        ?><li><?php echo "${key} : ${value}"; ?></li><?php
      }
      ?><br><?php
    } ?>
  </ul>
</body>
</html>