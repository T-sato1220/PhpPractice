<?php
$i = 0;
$li = trim(fgets(STDIN));
$line = array();
for($i=0; $i<$li; $i++){
    $input = explode(" ", trim(fgets(STDIN)));
    $line[$i] = $input;
}
echo $line[0][0] . " ";
echo $line[$li-1][1] . " ";
for($i=0; $i<$li; $i++){
    $max[$i] = $line[$i][2];
}
echo max($max) . " ";
for($i=0; $i<$li; $i++){
    $min[$i] = $line[$i][3];
}
echo min($min) . "\n";
?>
