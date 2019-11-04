<?php
echo 'hello php!';
echo "\n";

$name = "itou";
if ($name == "tani") {
   echo "私はtaniです";
}else{
  echo "あなたの名前ではありません。";
}
echo "\n";

$total = 0;
for ($i = 1; $i < 10001; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "orange", "lemon","strawberry","pineapple",);

echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}
echo "\n";

for($i = 1; $i < 101; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";    
  }    
}

function sum(){
  $result = 0;
  for($i = 1; $i <= 10; $i++){
    $result += $i;
  }
  return $result ;
}
echo sum();
    echo "\n"; 

function times2($num){
    return $num * 2;
}

function nibai($val){
  return $val * 2;
  
}
   echo "\n";
function f($a, $b){
  return $a + $b;
}

$arr = array(1, 3, 5, 7, 9);


function g($arr) {
  $result = 1;
  foreach($arr as $a){
    $result = $result * $a;
  }
}

$arr = array(1, 3, 11, 7, 9);
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){ 
    if($max_number<$a){
      $max_number = $a;
    }  
  }
  return $max_number;
}
