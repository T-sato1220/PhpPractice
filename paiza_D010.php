<?php
    $i = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
    echo $line[0] ."@".$line[1];
?>
