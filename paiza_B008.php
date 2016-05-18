<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $i= 0;
    while(! feof(STDIN)){
        $line[$i] = trim(fgets(STDIN));
        $i++;
    }
    $a = explode(" ",$line[0]);
//var_dump($a);
for($i=1;$i<$a[1]+1;$i++){
    $b = explode(" ",$line[$i]);
 for($j=0;$j<$a[0];$j++){
     $payoff += $b[$j];
 }
 if(0<=$payoff){
     $c += $payoff;
 }
 $payoff = 0;

}
if($c >0 ){
 echo $c."\n";
}else{
echo "0";
}
?>
