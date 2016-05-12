<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = explode(" ",$input_lines);
echo $a[0]." ";
        for($n = 0;$n <= 7; $n++){
            $a[0] += $a[1];
            echo $a[0] ." ";
        }
        echo $a[0] += $a[1];
?>
