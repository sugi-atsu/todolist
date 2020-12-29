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

<table class="user_table">
  <tr class="header">
    <?php foreach($result_user[0] as $key=>$value){ ?>
            <th><?php echo $key; ?></th>
      <?php } ?>
  </tr>
  
  <?php for($i = 0; $i < count($result_user); $i++){ ?>
    <tr class="record">
      <?php foreach($result_user[$i] as $key=>$value){ ?>
          <td><?php echo $value; ?></td>
      <?php } ?>
    </tr>
  <?php } ?>
</table>

<p class="title">todosテーブル</p>
<table class="todos_table">
  <tr class="header">
    <?php foreach($result_todos[0] as $key=>$value){ ?>
            <th><?php echo $key; ?></th>
      <?php } ?>
  </tr>
  
  <?php for($i = 0; $i < count($result_todos); $i++){ ?>
    <tr class="record">
      <?php foreach($result_todos[$i] as $key=>$value){ ?>
          <td><?php echo $value; ?></td>
      <?php } ?>
    </tr>
  <?php } ?>
</table>

</body>
</html>