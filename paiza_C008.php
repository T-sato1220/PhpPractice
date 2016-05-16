
<?php
$i =0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++;
    }
    $a = explode(" ", $line[0]);
    $b = explode($a[0], $line[1]);
    $hairetu = array($b);
   //var_dump($b);
    for($i = 0;$i < count($hairetu[0]);$i++){
    //echo $b[$i];
            if(strpos($b[$i],$a[1]) === 0){
               echo "<blank>\n";
            }elseif(strpos($b[$i],$a[1]) !== false){
       echo strstr($b[$i], $a[1], TRUE)."\n";
     //  var_dump($o);
       }
    }
?>
