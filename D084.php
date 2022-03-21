<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    if ($s == 1) {
      echo "January" . PHP_EOL;
    } elseif ($s == 2) {
      echo "February" . PHP_EOL;
    } elseif ($s == 3) {
      echo "March" . PHP_EOL;
    } elseif ($s == 4) {
      echo "April" . PHP_EOL;
    } elseif ($s == 5) {
      echo "May" . PHP_EOL;
    } elseif ($s == 6) {
      echo "June" . PHP_EOL;
    } elseif ($s == 7) {
      echo "July" . PHP_EOL;
    } elseif ($s == 8) {
      echo "August" . PHP_EOL;
    } elseif ($s == 9) {
      echo "September" . PHP_EOL;
    } elseif ($s == 10) {
      echo "October" . PHP_EOL;
    } elseif ($s == 11) {
      echo "November" . PHP_EOL;
    } elseif ($s == 12) {
      echo "December" . PHP_EOL;
    }

?>

<!-- 英語が堪能な Paiza 君ですが、唯一月の名前だけ覚えることができませんでした。
そこで、いつでも調べることができるように数字を入れるとその月を表す英語が表示されるアプリを開発してください。
＊＊＊＊注意！！！イコールの理解が甘い！！！ ==イコール2つで等しい =イコール一つは代入
OK! 100点 -->