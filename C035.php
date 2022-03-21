<?php
    $input_rownumbers = trim(fgets(STDIN)); // 3などの回数が入る
    $code = array('\r\n','\r','\n');
    $row = str_replace($code, '', $input_rownumbers);

    $a = 0; //変数のスコープ
    $b = 0;

    $pass = array();
    for ($i=0; $i < $row; $i++) { // 3回繰り返されり
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $s = str_replace($code, '', $input_lines);
        $order = explode(' ', $s);

        $sresult = $order[2] + $order[3];
        $sres = $order[1] + $order[2] + $order[3] + $order[4] +$order[5];
        $lresult = $order[4] + $order[5];
        $lres = $order[1] + $order[2] + $order[3] + $order[4] +$order[5];

        if ($order[0] == 's' && $sresult >= 160 && $sres >= 350) {
          $pass[] = 1;
        } elseif ($order[0] == 'l' && $lresult >= 160 && $lres >= 350) {
          $pass[] = 1;
        }
      }
      $c = count($pass);
    echo $c . PHP_EOL;
?>
できた！