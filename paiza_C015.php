<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
        $i = 0;
        $c = "3";
        $d = "5";
        $w = 0;
    while(! feof(STDIN)){
  $line[$i] = trim(fgets(STDIN));
  $i++;
    }

   // var_dump($line);
for($i=1;$i<$line[0]+1;$i++){
    $b = explode(" ",$line[$i]);
    $pos3 = strpos($b[0],$c);
    $pos5 = strpos($b[0],$d);
  //  var_dump($pos);
    if($pos3 !== false){
    $s = floor($b[1]*0.03);
    $w += $s;
}elseif($pos5 !== false){
    $t = floor($b[1]*0.05);
     $w += $t;
}else{
    $u = floor($b[1]*0.01);
     $w += $u;
}
}
echo $w;

?>
