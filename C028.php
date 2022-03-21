<?php
    $input_rownumbers = trim(fgets(STDIN)); // 3などの回数が入る
    $code = array('\r\n','\r','\n');
    $row = str_replace($code, '', $input_rownumbers);

    $score = 0; //変数のスコープ
    $b = 0;

    for ($i=0; $i < $row; $i++) { // 3回繰り返されり
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $s = str_replace($code, '', $input_lines);
        $voca = explode(' ', $s);

        if ($voca[0] === $voca[1]) {
          ++$score ;
        } elseif ($voca[0] == 'SET' && $voca[1] == 2) {
          $b = $voca[2];
        } elseif ($voca[0] == 'ADD') {
          $b = $a + $voca[1];
        } elseif ($voca[0] == 'SUB') {
          $b = $a - $voca[1];
        }
        // $voca[0] 処理の種類
        // $voca[1] 変数の種類
        // $voca[2] 処理したい数字
      }
    echo $a . ' ' . $b . PHP_EOL;
?>

タイムアップ