<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample02</title>
</head>
<body>
  <?php
    $db = new mysqli('localhost:3306', 'root', 'mtsay9918', 'mydb');
    $records = $db->query('select count(*) as cnt from my_items');
    if($records) { //レコードが正しく取得できていれば
      while($record = $records->fetch_assoc()) {
        echo $record['cnt'] . '<br>';
      }
    } else {
      echo $db->error;
    }
  ?>
</body>
</html>