<?php
    $input_lines = trim(fgets(STDIN)) ;// 3などの回数が入る
    $code = array('\r\n','\r','\n');
    $c = str_replace($code, '', $input_lines);

      $point = 40;
    for ($i=0; $i < ; $i++) { //3回繰り返される
          $input_lines = trim(fgets(STDIN)) ;//一行ずつのデータが入る
          $code = array('\r\n','\r','\n');
          $s = str_replace($code, '', $input_lines);
          $result = explode(' ', $s);
          $result =$result[0] + $result[1];
          if ($result > $point) {
            echo "silent" . PHP_EOL;
          } else {
            echo "noisy" . PHP_EOL;
          }
          echo $result[0] . ' : ' . $result[1] . PHP_EOL;
    }


    echo str_replace($search, $repalce,$str) . PHP_EOL;
?>
