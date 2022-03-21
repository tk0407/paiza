<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $res= explode(' ',$s);
    $result = $res[1] - $res[0];

    if($result <= 0){
      echo 'NO' . PHP_EOL; //trueだったらNG
    } else {
      echo $result . PHP_EOL;}
?>