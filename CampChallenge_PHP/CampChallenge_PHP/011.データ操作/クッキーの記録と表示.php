<?php
date_default_timezone_set('Asia/Tokyo');
$access_time = date('Y年m月d日 H:i:s') ;
setcookie('LastLoginDate',$access_time);
echo '前回のアクセス日時：'.$_COOKIE['LastLoginDate'];
 ?>
