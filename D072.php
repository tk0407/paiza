<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $res= explode(' ',$s);
    $result = ceil($res[0] / $res[1]);

    $a = $result * $res[2];
    echo $a
?>

