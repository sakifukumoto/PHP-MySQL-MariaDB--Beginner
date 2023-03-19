<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ詳細</title>
</head>
<body>
  <?php
    require('dbconnect.php');
    $stmt = $db->prepare('select * from memos where id=?');
    if(!$stmt) {
      die($db->error);
    }
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if (!$id) {
      echo '表示するメモを指定してください';
      exit();
    }
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $stmt->bind_result($id, $memo, $created);
    $result = $stmt->fetch();
    if (!$result) {
      echo '指定されたメモは見つかりませんでした';
      exit();
    }
  ?>
</body>
<div><pre><?php echo htmlspecialchars($memo); ?></pre></div>

<p>
  <a href="update.php?id=<?php echo $id; ?>">編集する</a> | <a href="/PHP+MySQL(MariaDB)%20Beginner/memo">一覧へ</a>
</p>
</html>