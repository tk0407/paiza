<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $number = [];
    $str = $s;
    $search = array('/', '<', '+');
    $repalce = array('1', '10', '');
    $number = str_replace($search, $repalce,$str);
    array_sum($number) . PHP_EOL;
?>