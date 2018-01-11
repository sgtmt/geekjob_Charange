<?php
$a=$_GET['a'];

$int = $a;   ## 処理数値指定（正の整数）

if($int <= 0 || is_float($int)){   ## 指定数値を限定
    print "正の整数を指定してください。";
} else {
    ## 素因数分解処理開始
    for($i = 2; true; ){
        if(($int % $i) === 0){
          //  print $i." ";
            $int = $int / $i;
        } else {
            ++$i;
        }
        if($int <= $i){
            if($int === 1){ print "1 ";}
            elseif($int == $i){
            //   print $i." ";
             }
            break;
        }
    }
    echo "元の数：".$a."<br />"."余った値：".$int;
}

?>
