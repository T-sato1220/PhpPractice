<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i = 0;
    $j = 0;
    $c = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++;
    }
    for($i=1;$i<=$line[0];$i++){
           $b = explode(".",$line[$i]);
              $c = 0;
            if(count($b)==4){
                for($j=0;$j<4;$j++){
                    if(0 <= $b[$j] && $b[$j] <= 255){
                       $c++;
                    }else{
                       echo "False\n";
                       break;
                  }
                 if($c == 4){
                     echo "True\n";
                     break;
                 }
                }
            }else{
                echo "False\n";
        }
    }

?>
