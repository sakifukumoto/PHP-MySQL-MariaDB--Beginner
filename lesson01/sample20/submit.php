<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample20</title>
</head>
<body>
  <!-- empty:空かどうか -->
  <?php if(!empty($_GET['my_name'])): ?>
  <!-- フォームのname属性に入っているものをリクエストのカッコのなかにいれる -->
    <p>お名前:<?php echo htmlspecialchars($_GET['my_name']); ?></p>
  <?php endif; ?>
</body>
</html>