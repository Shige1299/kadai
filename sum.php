<?php
//1
function kake($seki){
return $seki*2;    
}
echo kake(2);

//2
function add($a,$b){
    return $a+$b;
}
echo add(2,5);

//3
function product($arr){
  $total = 1;
  foreach($arr as $count){
      $total *= $count;
  }
  return $total;
 }
 echo product(array(1,3,5,7,9));

//4
function max_array($arr){
    $max_number=$arr[0];
    foreach($arr as $a){
        if($max_number<$a){
            $max_number=$a;
        }
    }
    return $max_number;
}
echo max_array(array(1,3,5,7,9));
?>
