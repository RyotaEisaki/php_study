<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>My Homepage</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>いま何時？</h1>

    <p>いま
    <?php
      date_default_timezone_set('Asia/Tokyo');
      echo date("Y 年 m 月 d 日 H 時 i 分 s 秒");
    ?>
    です。</p>

</body>
</html>