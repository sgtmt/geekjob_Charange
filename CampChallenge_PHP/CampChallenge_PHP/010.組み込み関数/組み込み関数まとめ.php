<?php
function zettai($number = 0){
  echo abs($number."<br />");
}

if(file_exists('log.txt')){

}else{
  touch('log.txt');
}
date_default_timezone_set('Asia/Tokyo');
$log_output = date("Y-m-d H:i:s") . " 開始 \r\n";
$fp = fopen('log.txt', 'a');
fwrite($fp, $log_output);
zettai(-1.9);
$log_output = date("Y-m-d H:i:s") . " 終了 \r\n";
fwrite($fp, $log_output);
fclose($fp);
// $fl = fopen('log.txt','w');
// if($fl != false){
//   fwrite($fl, write(times().'開始'."\n");
//     fwrite($fl,write(zettai(-1.9)));
//       fwrite($fl,write(times().'終了'."\n");
//   fclose($fl);
// }




echo file_get_contents('log.txt');
 ?>
