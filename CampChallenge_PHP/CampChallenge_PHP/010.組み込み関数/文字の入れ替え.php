<?php
$moji_I = 'I';
$moji_U = 'U';
$moji = 'きょうはぴいえいちぴいのくみこみかんすうのがくしゅうをしています';
$moji = str_replace('い',$moji_I,$moji);
$moji = str_replace('う',$moji_U,$moji);
echo $moji;
 ?>
