<?php
    $input_value = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $value = str_replace($code, '', $input_value);
    $values = explode(' ', $value);

    for ($i=0; $i < $free; $i++) {

        $a = $values[0] * ($values[1] * 0.1)
        $free = $a == 0;
      }


    echo $a . PHP_EOL;
?>