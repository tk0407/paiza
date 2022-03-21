<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    // 入力文字数を取得
    $length = strlen($s) - 1;

    $p = '/([\d\w])\1{' . $length . '}/';

    if (preg_match($p, $s)) {
        echo 'NG' . PHP_EOL;
    }
    else {
        echo 'OK' . PHP_EOL;
    }
?>