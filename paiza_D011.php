<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = rtrim(fgets(STDIN),"\n");
    $unset_str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $pos =  strpos($unset_str , $input_lines);
   echo $pos+1
?>
