<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問合せフォームを作る</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <h1>お問合せ内容確認</h1>
  
  <div class="confirm">
    <p>お問合せ内容はこちらで宜しいでしょうか？
      <br>よろしければ「送信する」ボタンを押して下さい。
    </p>
    <p>名前
      <br>
      <?php echo $_POST['name']; ?>
    </p>

    <p>メールアドレス
      <br>
      <?php echo $_POST['mail']; ?>
    </p>

    <p>年齢
      <br>
      <?php echo $_POST['age']; ?>
    </p>

    <p>コメント
      <br>
      <?php echo $_POST['comments']; ?>
    </p>

    <form action="index.html">
      <input type="submit" class="button1" value="戻って修正する">
    </form>

    <form action="insert.php" method="post">
      <input type="submit" class="button2" value="登録する">
      <input type="hidden" value="<?php echo $_POST['name'];?>">
      <input type="hidden" value="<?php echo $_POST['mail'];?>">
      <input type="hidden" value="<?php echo $_POST['age'];?>">
      <input type="hidden" value="<?php echo $_POST['comments'];?>">
    </form>
  </div>
</body>
</html>