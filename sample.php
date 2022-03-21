<?php

    // $str = 'hogehoge';
    // $result = str_replace('h','m',$str);
    // echo $result;

    $input_lines = trim('12\n');
    $result = str_replace('\n','',$input_lines);
    $result str_replace(array('\r\n','\n','\r'), '', $input_lines);
    echo $result . PHP_EOL;
?>