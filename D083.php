<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $res= explode(' ',$input_lines);
    $result = $res[0] + $res[1];

    // var_dump($res);

    if($result < 16){
      echo 'HIT' . PHP_EOL; //16未満だったらHIT
    } elseif ($result >= 16) {
      echo 'STAND' . PHP_EOL; //16以上だったらSTAND
    }
?>

できた！

点数100点！
タイム6:35

課題

あなたは整数を足して 21 を目指すゲームをプレイするプログラムを作成しています。

そのゲームでは、はじめに 2 つの数字を受け取り、更に数字を受け取るかどうかの判断をします。
受け取る場合は "HIT" 、受け取らない場合は "STAND" と出力するルールになっています。

以下のルールで "HIT" もしくは "STAND" を出力するプログラムを作成してください。

・2つの数字の合計が 16 未満であれば "HIT"
・2つの数字の合計が 16 以上であれば "STAND"