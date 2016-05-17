<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
  $i = 0;
  $j = 0;
  $c = 0;

    while(! feof(STDIN)){
  $line[$i] = trim(fgets(STDIN));
  $i++;
    }

    for($i=1;$i<$line[0]+1;$i++){
        for($j=1;$j<=$line[$i]/2;$j++){
            $divs = $line[$i] / $j;
        $divp = $line[$i] % $j;
        if($divp == 0){
             $c = $j+$c;
        }
}
if($c==$line[$i]){
    echo "perfect\n";
}elseif($c == $line[$i]-1){
    echo "nearly\n";
}else{
    echo "neither\n";
}
$c = 0;
}
?>
