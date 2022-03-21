<?php
    $input_lines = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);
    $date = explode('', $datetime);
    $hour = explode('', $date);
    $minute = explode('', $hour);

    list($year, $month, $day, $hour, $minute, $second) = preg_split('/[-: ]/', $datetime);
    var_dump($year, $month, $day, $hour, $minute, $second);
    // datetime文字列を分割猿方法 ※ただし/は取り除けなかったので2013-07-08のフォーマットでないと動かない



    $realdate = 0;
    if ($datetime[2] >= 24) {
      $extradate = $datetime[2] / 24;
      $realdate = $datetime[1] + $extradate;
      $realhour = $datetime[2] % 24;
      echo $datetime[0] . '/' . $datetime[1] . ' ' . $datetime[2] . ':' . $datetime[3] . PHP_EOL;
    } else {
      echo $datetime . PHP_EOL;
    }
?>
タイムアップ...

最初の行でexplode関数使えば文字列を分割できるらしい。
    $input_lines = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);
    $date = explode('', $s);
    $hour = explode('', $date);
    $minute = explode('', $hour);