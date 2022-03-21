<?php
    // ①
    // $code = array('\r\n','\r','\n');
    // $s = str_replace($code, '', $input_lines);

    // $arr = str_split($s);
    // $c = count($arr);
    // echo "$c" .PHP_EOL;

    // ②
    // $input_lines = trim(fgets(STDIN)) ;
    // $code = array('\r\n','\r','\n');
    // $s = str_replace($code, '', $input_lines);

    // $arr = str_split($s);

    // $flag = false; // もしここで違う文字列が出たらtrue
    // for ($i=0; $i < $c; $i++) {
    //   if ($arr[0] != $arr[$i]) {
    //       $flag = true;
    //   }
    // }

    // if($flag) {
    //   echo 'OK' . PHP_EOL; //trueだったらOK
    // } else {
    //   echo 'NG' . PHP_EOL; //falseだったらNG
    // }

    // echo "$c" .PHP_EOL;
    // ③
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $arr = str_split($s);
    foreach ($arr as $res) {

    if(!empty($res)) {
      echo '*' . PHP_EOL; //trueだったらOK
    } else {
      echo '' . PHP_EOL; //falseだったらNG
    }
    }
?>