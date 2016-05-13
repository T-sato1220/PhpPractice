<?php
  $i = 0;
  $j = 0;
  $k = 0;
  $d = 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++ ;
    }
        $a = explode(" ", $line[0]);
        $b = explode(" ", $line[1]);

    for($j=2; $j <= $a[1]+1; $j++){
        $c = explode(" ", $line[$j]);
        for($k=0;$k<$a[0];$k++){
            $d += $c[$k]*$b[$k];
        }
                $array[$j] = round($d);
             rsort($array); 
          $d = 0;

    }
  //  var_dump($array);

       for($i=0;$i<$a[2];$i++){
           if($i==$a[2]-1){
               echo $array[$i];
           }else{
       echo $array[$i] . "\n";
       }
   }
?>
