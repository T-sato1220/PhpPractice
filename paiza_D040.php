<?php
 $i = 0;

    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
    $c = 0;
        for($i=0;$i<7;$i++){

            if($line[$i] <= 30){
              $c++;
        }
     }
        echo $c;
?>
