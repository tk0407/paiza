<?php
    $input_lines = trim(fgets(STDIN));

    // $result = 15 - array_sum(array($input_lines))

    // print_r($input_lines);
    // $sum = array_sum($input_lines);
    $ar = array($input_lines);
    echo array_sum($ar);

    $result = 15 - $ar;

    echo $result . PHP_EOL;

?>
Gave up