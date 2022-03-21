<?php
    $input_row = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $rows = str_replace($code, '', $input_row);
    $row = explode(' ', $rows);

    var_dump($row);
    // 変数のスコープ
    $opening_price =0;
    $closing_price =0;
    $highest_price =0;
    $lowest_price =0;
    // for の外に変数が１〜２必要
    for ($i=0; $i < $row; $i++) {
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $results = str_replace($code, '', $input_lines);
        $numbers = explode(' ', $results);

    var_dump($numbers);

        // $startprice = $numbers[0];
        // $endprice = $numbers[1];
        // $highprice = $numbers[2];
        // $lowprice = $numbers[3];

        if ($i===0) {
            $opening_price = $startprice;
      } elseif ($i==$row) {
            $closing_price = $endprice;
      }
      // } elseif ($numbers[2] > other $numbers[2]){
      //       $highest_price = $numbers[2];
      // } elseif ($numbers[3] < other $numbers[3]){
      //       $lowest_price = $numbers[3];
      // }
    }



        echo $opening_price . ' ' . $closing_price . ' ' . PHP_EOL;

?>