<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    //$input_lines = fgets(STDIN);
        $i = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
    if($i==0){
         echo "Hello". " ";
     }elseif($i < $line[0]){
         echo $line[$i] . ",";
     }elseif($i == $line[0]){
         echo $line[$i] .".";
     }
        $i++ ;
    }

?>
