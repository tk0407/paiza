<?php

    // $str = 'hogehoge';
    // $result = str_replace('h','m',$str);
    // echo $result;

    $input_lines = trim('12\n');
    $result = str_replace('\n','',$input_lines);
    $result str_replace(array('\r\n','\n','\r'), '', $input_lines);
    echo $result . PHP_EOL;

// 一行の場合
// 標準入力からの入力値を変数に代入します
$input = trim(fgets(STDIN));

// 取得した入力値を半角スペースで分解します
$inputs = explode(' ', $input);

// 単一行の入力の場合はこれだけで各入力値が配列の要素として使えます
var_dump($input);
var_dump($inputs);



    // 複数行の場合
declare(strict_types=1);

// 標準入力を一行ずつ配列に代入します
$tmp = [];
while ($line = fgets(STDIN)) {
    $tmp[] = trim($line);
}

// 配列の各要素をさらに分解します
$inputs = [];
foreach ($tmp as $value) {
    $inputs[] = explode(' ', $value);
}

// 出力
var_dump($inputs);




