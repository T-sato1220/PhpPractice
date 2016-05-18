<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = explode(" ",$input_lines);

    $ave = array();
    $start = array();
    $end = array();
    $aa = $a[1];
    for($i = 0 ; $i < $a[0]; $i++){
        $day = trim(fgets(STDIN));
            $b = explode(" ",$day);
            $days[] = $b[0];
            $pro[] = $b[1];
    }
     for($i=0 ; $i <= $a[0] - $a[1] ; $i++){
        $ave[$i] = 0;
    }
     for($i=0 ; $i <= $a[0] - $a[1] ; $i++){
        for($j=0 ; $j < $a[1] ; $j++){
             $ave[$i] += $pro[$i+$j];
        }
          $ave[$i] = $ave[$i] / $a[1];
         $start[$i] = $days[$i];
        $end[$i]   = $days[$i + $aa -1];
}

    $min = min($ave);
    foreach($ave as $key => $ave_value){

        if($min === $ave_value){

            echo $start[$key] . " " . $end[$key] . "\n";
            break;
        }
    }

?>
