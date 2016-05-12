<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");

    $a = explode(" ", $input_lines);
    if($a[0] < $a[1]){
       echo $a[1];
    }elseif($a[1] < $a[0]){
        echo $a[0];
    }else{
       echo "eq";
  }



?>
