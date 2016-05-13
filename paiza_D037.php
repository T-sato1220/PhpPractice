<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

for($i=0;$i<5;$i++){
    $a[$i] = trim(fgets(STDIN));
}
 $b = $a[1]% $a[0];
 $c = $a[1]/ $a[0];
 if($b == 0){
     echo floor($c);
 }else{
     echo floor($c+1);
 }

?>
