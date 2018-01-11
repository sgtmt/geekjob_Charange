<?php
$fl = fopen('test.txt','r');
if($fl != false){
  echo fgets($fl);
  fclose($fl);
}
 ?>
