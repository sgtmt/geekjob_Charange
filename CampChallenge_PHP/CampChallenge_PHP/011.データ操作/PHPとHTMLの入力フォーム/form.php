<?php

session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $na ="";
    $favs = "";
  $na = $_POST['name'];
  $_SESSION['name'] = $_POST['name'];
  $favs = $_POST['fav'];
  $_SESSION["fav"] = $_POST["fav"];
  $sex = $_POST['sex'];
  $_SESSION["sex"] = $_POST["sex"];
  print("次の商品を登録しました<br />");
  print("商品：$na<br />");
      print("商品：$sex<br />");
    print("商品：$favs<br />");


echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">前に戻る</a>';
?>

  </body>
</html>
