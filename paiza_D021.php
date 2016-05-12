<?php
$i = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }

    if($line[0]==$line[1]){
        echo "Yes";
    }else{
        echo "No";
    }
?>
