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
