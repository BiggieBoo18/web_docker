<!DOCTYPE html>
<html>
  <body>
    <h1>c.php</h1>
    <a href=index.php>index.php</a><br>
    <a href=a.php>a.php</a><br>
    <a href=b.php>b.php</a><br>
    <form method="GET">
      <p>検索:<input type="text" name="q" value=""></p>
      <p><input type="submit" value="送信"></p>
    </form>
    <p>検索ワード:<?php echo $_GET["q"] ?></p>
  </body>
</html>
