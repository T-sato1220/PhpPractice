<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = explode(" ",$input_lines);

    $c = $a[0] / $a[1];
    $b = $a[0] % $a[1];
    echo floor($c) ." ".$b;
?>
