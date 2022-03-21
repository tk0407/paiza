<?php

    // 標準入力
    // fgets関数で標準入力地（STDIN）を受け取る
    // 前後の空白をtrim関数で削除
    $input_lines = trim(fgets(STDIN));

    // 改行コードをstr_replace関数で''に変換（削除する）
    $code = array('\r\n','\n','\r');
    // $s = str_replace($code, '', $input_lines);

    // D074問題
    // $result = 0;
    // if ($s >= 24) {
    //     $result = $s - 24;
    // } else {
    //   $result = $s = 0;
    // }

    // D073問題
    // $input_lines = fgets(STDIN);
    // print strrev($input_lines) ."\n";

    // 標準出力
    echo $input_lines . PHP_EOL;
    // 改行処理含まれる。
    // var_dump( strrev($input_lines) );

    // var_dump($result);

?>
