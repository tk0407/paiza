<?php
    $input_rownumbers = trim(fgets(STDIN)); // 3などの回数が入る
    $code = array('\r\n','\r','\n');
    $row = str_replace($code, '', $input_rownumbers);

    $a = 0; //変数のスコープ
    $b = 0;

    for ($i=0; $i < $row; $i++) { // 3回繰り返されり
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $s = str_replace($code, '', $input_lines);
        $order = explode(' ', $s);

        if ($order[0] == 'SET' && $order[1] == 1) {
          $a = $order[2];
        } elseif ($order[0] == 'SET' && $order[1] == 2) {
          $b = $order[2];
        } elseif ($order[0] == 'ADD') {
          $b = $a + $order[1];
        } elseif ($order[0] == 'SUB') {
          $b = $a - $order[1];
        }
        // $order[0] 処理の種類
        // $order[1] 変数の種類
        // $order[2] 処理したい数字
      }
    echo $a . ' ' . $b . PHP_EOL;
?>

できた！

