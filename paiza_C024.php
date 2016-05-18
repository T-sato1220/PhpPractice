<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
      $var = array(0, 0);
    for($i = 0; $i< $input_lines; $i++){
       $li = trim(fgets(STDIN));
      $ali = explode(" ",$li);
      $move = $ali[0];

    if($move === "SET"){
         if($ali[1] === "1"){
                $var[0] = $ali[2];
}else{
       $var[1] = $li[2];
}
 }elseif( $move === "ADD" ){
     $var[1]  = $var[0] + $ali[1];
 }else{
     $var[1]  = $var[0] - $ali[1];
 }
    }
    echo $var[0] . " " . $var[1] . "\n";

?>
