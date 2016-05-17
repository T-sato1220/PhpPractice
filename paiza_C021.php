<?php
 $i =0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++;
    }
    $a = explode(" ",$line[0]);
    $r1 = $a[2]*$a[2];
    $r2 = $a[3]*$a[3];
    for($i = 2;$i < $line[1]+2; $i++){
        $x = explode(" ",$line[$i]);
        $p1 = ($x[0]-$a[0])*($x[0]-$a[0]);
        $p2 = ($x[1]-$a[1])*($x[1]-$a[1]) ;
        $pp = $p1 + $p2;
        if($r1 <= $pp && $r2 >= $pp){
            echo "yes\n";
        }else{
            echo "no\n";
        }
    }
?>
