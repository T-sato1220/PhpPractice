<?php
// 自分の得意な言語で
    // Let's チャレンジ！！
    $a = trim( fgets(STDIN) );
    $b = trim( fgets(STDIN) );
    $before = 0;
    $sum = 0;
    $display = 0;
    for($i=0 ; $i < $b ; $i++){
        $tmp = trim( fgets(STDIN) );
        $fax = explode(" ", $tmp);
        if($before !== $fax[0] && $i > 0){

            $need = floor($sum / $a);
            if($sum % $a !== 0){
                $need++;
            }

            $display += $need;
            $sum = 0;
        }
        $sum += $fax[2];
        $before = $fax[0];
    }
    $need = floor($sum / $a);
    if($sum % $a !== 0){
            $need++;
    }
    $display += $need;
    echo $display . "\n"
?>
