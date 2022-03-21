<?php
    $input_lines1 = trim(fgets(STDIN)) ;
    $input_lines2 = trim(fgets(STDIN)) ;
    $input_lines3 = trim(fgets(STDIN)) ;
    $input_lines4 = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines1);

    $result = ($input_lines1 + $input_lines2 + $input_lines3 + $input_lines4);
    echo (15 - $result) . PHP_EOL;
?>
上記、与えられた幾つかの数字を計算する時に便利！