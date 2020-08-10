<!-- 課題1 -->
<?php

function times2($num) {
    return $num * 2;
}

echo times2(5);
// $func = function($value) {
//     return $value * 2;
// };

// print_r(array_map($func, range(1,8)));
?>

<!-- 課題2 -->
<?php
// $a = 3;
// $b = 2;

function sum($a, $b) {

  return $a + $b;  
}

echo sum(3,2);
// print_r($a + $b);
?>

<!-- 課題3 -->
<?php
function x(array $array): float  
{
    $num = 1;
    foreach($array as $value) {
        $num *= $value;
    }
    return $num;  
}
    
$list = [1, 3, 5, 7, 9];  
$result = x($list); 
print($result);
?>

<!-- 課題4 -->
<?php
function max_array($arr){
    
     $max_number = $arr[0];
     foreach($arr as $a){
       if($max_number < $a) {
           $max_number = $a;
       }
     }
    
     return $max_number;
     }

     echo max_array(array(11, 33, 55, 77, 99));
?>

<!-- 課題5 -->
<?php
// タグを除く
$str = "<h1>Hello</h1>" . "<div>World</div>";
echo strip_tags($str) . "\n";
// 要素の追加
$trackandfield = ['TripleJump', 'LongJump', 'HighJump'];

array_push($trackandfield, 'PoleVault');

print_r($trackandfield);
// 配列の結合
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);

print_r($array);
// 現在日時
echo date('Y/m/d', time());
echo "\n";
// 7日後
$nweek = time() + (7 * 24 * 60 * 60);
echo date('Y/m/d', $nweek);
echo "\n";
// UNIXタイムスタンプ　指定した日時
$timestamp = mktime(0, 0, 0, 8, 10, 2017);
echo $timestamp;