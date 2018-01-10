<?php
$mail = 'nr.sgtmt@gmail.com';
$mail_count= mb_strlen($mail);
$set_count = strpos($mail,'@');
$moji_g = mb_substr($mail,$set_count+1,$mail_count-$set_count);
echo $moji_g;
 ?>
