<?php
//フルーツの連想配列
$fruits=["りんご"=>"100","みかん"=>"50","桃"=>"500"];

 //個数の配列
$num=[3,3,6];

$i=0;

function totalprice($value,$num){
    $total=$value*$num;
    return $total;
}

foreach($fruits as $key => $value){
    $total=totalprice($value,$num[$i]);
    echo $key,"は",$total,"円です。";
    $i++;
    echo '<br>';
    }   

?>