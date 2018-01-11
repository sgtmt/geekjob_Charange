<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
$access_time = date('Y年m月d日 H:i:s') ;
$_SESSION['LastLoginDate'] = $access_time;
echo $_SESSION['LastLoginDate'];
 ?>
