<?php
    $input_rownumbers = trim(fgets(STDIN)); // 3などの回数が入る
    $code = array('\r\n','\r','\n');
    $row = str_replace($code, '', $input_rownumbers);

    $command = '';

    $arr = array();

    for ($i=0; $i < $row; $i++) { // 3回繰り返されり
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $command = str_replace($code, '', $input_lines);
        }


        var_dump($command);

        if ($command == 'rock') {
          
        }

    $command = count($arr);


    echo $a . ' ' . $b . PHP_EOL;?>

    自力でできず...