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

//5
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');

$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits);

$array1 = array(1 => "data1");
$array2 = array(2 => "data2");
$result = array_merge($array1, $array2);
print_r($result);

date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

echo date("l");
?>

