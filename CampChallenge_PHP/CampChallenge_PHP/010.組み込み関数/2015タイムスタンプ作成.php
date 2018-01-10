<?php
$today  = strtotime('2015-12-31 23:59:59');
echo $today."\n";
$target = strtotime('2015-01-01 00:00:00');
echo $target."\n";
$diff = $today-$target;
echo $diff;


?>
