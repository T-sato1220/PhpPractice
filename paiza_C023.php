<?php
   $i = 0;
   $d = 0;
   $e = 1;
while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
        $a = explode(" ", $line[0]);
        $b = explode(" ", $line[1]);
        //var_dump($a);
        for($j=2;$j<$b[0]+2;$j++){
        $c = explode(" ", $line[$j]);
          //var_dump($c);
        $d = array_merge($c,$a);
        print_r(array_count_values ($d));
        if(array_count_values ($d) == 2){
            echo "S";
        }else{
            echo "N";
        }


   }
      ?>
