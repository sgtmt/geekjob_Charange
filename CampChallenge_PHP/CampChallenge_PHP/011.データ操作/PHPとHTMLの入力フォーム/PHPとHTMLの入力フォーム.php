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


     <form action="case.php" method="post" enctype="multipart/form-data">
    <p>以下を記入して、「送信する」を押して下さい。</p>
      <input type="text" name="name" value="<?= $_SESSION["name"]; ?>"></input><br />
    <input name="sex" type="radio" value="男"
<?php if (isset($_SESSION['sex']) && $_SESSION['sex'] == "男"){ print " checked"; }?>
>
<input name="sex" type="radio" value="女"
<?php if (isset($_SESSION['sex']) && $_SESSION['sex'] == "女"){ print " checked"; }?>

><br />
     <textarea cols="40" name="fav" rows="5"><?= $_SESSION["fav"]; ?></textarea>
    <p><input type="submit" value="送信する"></p>

</form>
  </body>
</html>
