<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i =0;
    while(! feof(STDIN)){
  $line[$i] = trim(fgets(STDIN));
  $i++;
  $c =0;
    }
    $a = explode(" ",$line[0]);
   // var_dump($a);
    $r = $a[1]+$a[1];
    for($i=1;$i<$a[0]+1;$i++){
       $b = explode(" ",$line[$i]);
      //var_dump($b);
       for($j=0;$j<3;$j++){
           if($r <= $b[$j]){
           $c++;
           }
       }
       if($c == 3){
           echo $i."\n";
    }
    $c = 0;
    }
?>
