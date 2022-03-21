<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $arr = str_split($s);

    $res = array_product($arr);

    if($res > 9999 ){
      echo 'NG' . PHP_EOL; //trueだったらNG
    } else {
      echo '$res' . PHP_EOL; //falseだったら数字を表示
}
?>

あなたは正の整数の掛け算のみをする計算機のプログラムを作成しています。
その計算機は最大で4桁までしか表示できず 9,999 より大きな数字は表示が出来ず "NG" と表示されます。

2つの正の整数 a, b が入力されるので、a と bを掛け算した時 9,999 以下であれば掛け算した結果を出力し、10,000 以上の場合は "NG" と出力するプログラムを作成してください

Times up


<?php

explode('',$input_lines);
$result = $res[0] * $res[1];



?>