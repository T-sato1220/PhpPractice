<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
     $input_lines = trim(fgets(STDIN),"\n");

    $a = explode(" ", $input_lines);
    $b = $a[0]*($a[1]/100);
    $c = $a[0]-$b;
    $d = $c*($a[2]/100);
    $e = $c -$d;
    echo $e;
?>
