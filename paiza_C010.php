<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i =0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++;
    }
  //var_dump($line);
    $a = explode(" ", $line[0]);
    for($i = 2; $i < $line[1]+2; $i++){
       $b = explode(" ",$line[$i]);
      // var_dump($b);
       $c = (($b[0]-$a[0])*($b[0]-$a[0]));
       $d = (($b[1]-$a[1])*($b[1]-$a[1]));
       $sum = $c+$d;
      // echo $sum."\n";
      if(($a[2]*$a[2])>$sum){
          echo "noisy\n";
          }else{
              echo "silent\n";
    }
    }
?>
