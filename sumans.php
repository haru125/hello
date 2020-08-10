<?php
// Your code here!
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function times2($num){
    return $num * 2;
}
// echo times2(5).PHP_EOL;

// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sumab($a,$b){
    return $a + $b;
}
// echo sumab(2,5);

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}

function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));


// 別解
// function product($carry, $item){
//     $carry *= $item;
//     return $carry;
// }
// $a = array(1, 2, 3, 4, 5);
// var_dump(array_reduce($a, "product",1));

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 
 echo max_array(array(6, 2, 3, 10, 5));
?>

