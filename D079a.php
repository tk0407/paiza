<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    // // 入力文字数を取得
    // $length = strlen($s) - 1;

    // $p = '/([\d\w])\1{' . $length . '}/';

    // if (preg_match($p, $s)) {
    //   echo 'NG' . PHP_EOL;
    // }
    // else {echo 'OK' . PHP_EOL;
    // }

    // 配列化→ １文字目と比較
    // str_spilitは変数を配列に
    $arr = str_split($s);

    // 繰り返して比較
    $c = count($arr);
    $flag = false; // もしここで違う文字列が出たらtrue
    for ($i=0; $i < $c; $i++) {
      if ($arr[0] != $arr[$i]) {
          $flag = true;
      }
    }

    if($flag) {
      echo 'OK' . PHP_EOL; //trueだったらOK
    } else {
      echo 'NG' . PHP_EOL; //falseだったらOK
    }
?>