<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++;
    }
    $c = 1;
    for($i=2;$i<$line[1]+2;$i++){
       // var_dump($line[$i]);
        $pos = strpos($line[$i],$line[0]);
        if($pos === false){
            echo $line[$i]."\n";
            $c += $c;
        }
    }
    if($c === 1){
        echo "none\n";
    }
?>
