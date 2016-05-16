
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i = 0;
    $c = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++;
    }
 //   var_dump($line);
    $a = explode(" ",$line[0]);
    for($i=2;$i<$line[1]+2;$i++){
        $b =explode(" ",$line[$i]);
        //var_dump($b);
        for($j=0;$j<6;$j++){
            for($k=0;$k<6;$k++){
          if($a[$k] == $b[$j]){
               $c++;
            }
            }
        }
     echo $c."\n";
     $c = 0;
    }


?>
