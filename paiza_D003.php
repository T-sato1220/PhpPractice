<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    for($i = 1; $i <= 9; $i++){
        $s = $input_lines * $i;

        if($i == 9){
            echo $s;
        exit;
        }
        echo $s ." ";
    }
?>
