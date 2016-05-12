<?php
    $input_lines = trim(fgets(STDIN));
    $a = explode(" ",$input_lines);

   $c = $a[0]-$a[1];
   if($c>0){
       echo $c;
   }else{
       echo $c-$c-$c;
   }
?>
