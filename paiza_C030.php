<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i = 0;
    $j = 0;
    while(! feof(STDIN)){
  $line[$i] = trim(fgets(STDIN));
  $i++;
    }
    //var_dump($line);
    $a = explode(" ",$line[0]);
    for($i=1;$i<$a[0]+1;$i++){
        $b = explode(" ",$line[$i]);
        for($j=0;$j<$a[1];$j++){
       //    var_dump($b);
        if($b[$j] >= 128){
            echo "1";
        }elseif($b[$j] <= 127){
            echo "0";
            }
              if($j == $a[1]-1){
                echo "\n";
            }elseif($j !=$a[1]){
                echo " ";
    }
        }

    }
    ?>
