テストが返却されたので、友達同士で平均点を計算することになりました。 人数が自分を含め 7 人なので、どうしても割り切れない場合があるため、 小数点 1 桁まで計算し、小数点以下 2 桁目で四捨五入することにしました。 例えば入力例 1 の場合、平均点が 58.571.... と続いていくので、小数点第一位までの "58.6" を出力します。
7 人の点数が入力されるので、平均点を小数点以下 1 桁で表示してください。
<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    $res= explode(' ',$s);
    $result = ($res[0] + $res[1] + $res[2] + $res[3] + $res[4] + $res[5] + $res[6] + $res[7] + $res[8]);
    $b = ($result / 7);
    $a = round($b,1);
    echo $a
?>