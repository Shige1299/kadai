<?php
//1
$name = "shige";
if ($name = "shige"){
    echo "私は".$name."です";
}else {
    echo "あなたの名前ではありません";
}
//２
$total = 0;
for ($i = 0;$i <= 10000;$i ++) {
    $total += $i;
}
echo $total;
//3
$fruits = array("grape","apple","orange","banana","berry");
foreach($fruits as $fruit){
echo $fruit;
}
//4
$start = 1;
$end = 100;
for ($i=$start;$i<=$end;$i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
?>