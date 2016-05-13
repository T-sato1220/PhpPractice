<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
     $c = 21 % $input_lines;
   if($c == 0){
       echo $input_lines;
   }else{
       echo $c;
       }
?>
