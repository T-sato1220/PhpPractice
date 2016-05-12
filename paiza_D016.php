<?php
 $i = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
   echo substr($line[0], 0, $line[1]) ;
?>
