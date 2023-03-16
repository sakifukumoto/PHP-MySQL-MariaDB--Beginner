<?php
$hello = 'こんにちは';
echo $hello . '<br>';
echo '$hello<br>'; //シングルクオーテーションは中身をそのまま出力する、頑固
echo "$hello<br>"; //ダブルクオーテーションは変数が入っている場合に限り変数の中身を出力する、計算式はそのまま出力

for($i=0; $i<366; $i++):
  $time = strtotime("+$i day");
  $day = date("n/j(D)", $time);
  echo $day . "<br>";
endfor;
?>
