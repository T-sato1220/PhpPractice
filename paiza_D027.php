<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $c = 1;
    for($i=0;$i<=$input_lines;$i++){
        $c = $i +$c;

    }
    echo  $c-1;
?>
