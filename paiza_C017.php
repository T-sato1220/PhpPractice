<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i = 0;
    while(! feof(STDIN)){
  $line[$i] = trim(fgets(STDIN));
  $i++;
    }
        $a = explode(" ",$line[0]);
for($i=2;$i<$line[1]+2;$i++){
    $b = explode(" ",$line[$i]);
    if($b[0]<$a[0]){
       echo "High\n";
    }elseif($b[0]>$a[0]){
        echo "Low\n";
    }elseif($b[0]==$a[0]){
        if($b[1]>$a[1]){
            echo "High\n";
        }else{
             echo "Low\n";
        }
    }
}
?>
