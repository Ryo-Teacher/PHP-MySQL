<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample21</title>
</head>
<body>
  <h2>ご予約日</h2>
  <?php echo $reserves = $_REQUEST['reserve']; ?>
  <ul>
    <?php foreach ($reserves as $reserve): ?>
      <li><?php echo htmlspecialchars($reseve, ENT_QUOTES); ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
