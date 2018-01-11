<?php
//echo "総額". $_GET['a']."円、個数".$_GET['b']."個、商品種別は".$_GET['c'];
$a=$_GET['a'];
$b=$_GET['b'];
$c =$_GET['c'];
$tank= $a/$b;
$point ="";
$code = "";
if($c==1){
  $code = "雑貨";
}elseif($c==2){
  $code = "新鮮食品";
}elseif($c==3){
  $code = "その他";
}
if($a >=3000 and $a<5000){
  $point =4;
}elseif ($a>=5000) {
  # code...
  $point =5;

}else{
  $point = 0;
}
echo $code."の1個当たりの値段は".$tank."円です。また総額に応じて付くポイントは".$point."です。";
?>
