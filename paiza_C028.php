<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim( fgets(STDIN) );
    $sum = 0;
    for($i=0 ; $i < $input_lines ; $i++){
        $count = 0;
        $a = trim( fgets(STDIN) );
        $b = explode(" ", $a);
        $ans = strlen($b[0]);
        $stu = strlen($b[1]);

        if($ans !== $stu){
            $count = 2;
        }
        $mod = str_split($b[0]);
        $stu = str_split($b[1]);
        for($j=0 ; $j < $ans; $j++){
            if($count < 2){
                if( strcmp($mod[$j], $stu[$j]) ){
                    $count++;
                }
            }
        }
        $sum = $sum + (2 - $count);
    }

    echo $sum;
?>
