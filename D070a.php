<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $res= explode(' ',$input_lines);
    $result = $res[0] - $res[1];
      echo $result . PHP_EOL;
?>

