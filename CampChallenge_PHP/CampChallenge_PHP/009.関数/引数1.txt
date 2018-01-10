<?php
function sindan($data =10){
  if($data % 2 == 0){
    echo $data."は偶数です";
  }else{
    echo $data."は奇数です。";
  }

}
sindan(7);
 ?>
