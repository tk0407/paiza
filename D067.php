<!-- あなたはスイッチの状態を表示するプログラムを作成しています。
そのスイッチは1度押すと "ON" と "OFF" が切り替わります。

スイッチの初期状態は "OFF" でスイッチを押した回数 n が入力されるので n 回スイッチが押された後の状態を出力してください。 -->
<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    if ($s%2 == 1) {
      echo "ON";
    } else {
      echo "OFF";
    }
?>

