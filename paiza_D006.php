<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = explode(" ",$input_lines);
  if($a[1] == 'km'){
      echo $a[0] * 1000000;
  }elseif($a[1] == 'm'){
      echo $a[0] * 1000;
  }else{
      echo $a[0]*10;
  }
?>
