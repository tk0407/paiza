<?php
    // 基準値（工事ポイント）

    $input_lines1 = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines1);
        $res = explode(' ', $s);
        $point = pow($res[2],2);

    $input_lines = trim(fgets(STDIN)); // 3などの回数が入る
    $code = array('\r\n','\r','\n');
    $c = str_replace($code, '', $input_lines);

    $arr = array();

    for ($i=0; $i < $c; $i++) { // 3回繰り返されり
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $s = str_replace($code, '', $input_lines);
        $results = explode(' ', $s);
        $result = pow(($results[0] - $res[0]),2) + pow(($results[1] - $res[1]),2);
        if ($result >= $point) {
            $arr[] = 'silent';
            // echo 'silent' . PHP_EOL;
        } else {
            $arr[] = 'noisy';
            // echo 'noisy' . PHP_EOL;
        }
    }

    $c = count($arr);

    for ($i=0; $i < $c; $i++) {
        echo $arr[$i] . PHP_EOL;
    }

?>

できた！


今日みたいな天気のよい休日は、近所の公園に行って読書をしましょう！
早速、お気に入りの本を持って公園にやってきたあなたでしたが、不運なことに公園の一角で工事が行われているようです。
工事現場の近くは騒音が大きいので読書に向いていません。 そこであなたは、まず読書に適した場所を探すことにしました。

工事現場は公園にただ一つだけあり、その位置は (a, b) です。
工事現場から距離 R メートル未満は騒音が大きいので読書には適していません。
また、公園には読書にうってつけの木陰が N 箇所あり、i 番目の木陰の位置は (x_i, y_i) です。

以上の情報が与えられたとき、各木陰が読書に適している(つまり、工事現場から R メートル以上離れている)かどうかを判定するプログラムを書いてください。

「位置 (x, y) が工事現場から R メートル以上離れている」という条件は以下の式で表されます。
(x-a)^2 + (y-b)^2 >= R^2
