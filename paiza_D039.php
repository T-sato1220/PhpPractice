<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    //$input_lines = fgets(STDIN);
    $i = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
 if($line[0] != $line[1]){
        echo "NO";
    }elseif($line[1] != $line[2]){
        echo "NO";
    }elseif($line[2] != $line[0]){
        echo "NO";
    }else{
    echo "YES";
    }
