<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $str = $s;
    $search = array('A', 'E', 'G', 'I', 'O', 'S', 'Z');
    $repalce = array('4', '3', '6', '1', '0', '5', '2');
    echo str_replace($search, $repalce,$str) . PHP_EOL;
?>
できた！

Leet と呼ばれるインターネットスラングがあります。
Leet ではいくつかのアルファベットをよく似た形の他の文字に置き換えて表記します。 Leet の置き換え規則はたくさんありますが、ここでは次の置き換え規則のみを考えましょう。
置き換え前 置き換え後
A 4
E 3
G 6
I 1
O 0
S 5
Z 2
文字列が入力されるので、これを Leet に変換して出力するプログラムを書いてください。