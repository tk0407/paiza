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
answer
