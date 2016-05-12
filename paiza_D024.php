<?php
$i=0;
while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
    $a = 180 - $line[0] -$line[1];
    echo $a;
?>
