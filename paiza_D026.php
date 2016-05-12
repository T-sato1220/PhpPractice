<?php
 $i = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
    for($i=0;$i<7;$i++){
        if($line[$i]=="yes"){
            $a++;
        }else{
            $b++;
        }
    }
        echo $b;

?>
