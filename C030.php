<?php
    $input_rownumbers = trim(fgets(STDIN)); // 3などの回数が入る
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_rownumbers);
    $a = explode(' ', $s);

    var_dump($a);

    $pixel1= array();
    for ($i=0; $i < $a[0]; $i++) {
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $d = str_replace($code, '', $input_lines);
        $pixel1 = explode(' ', $d);
    }
    var_dump($input_lines);


    if ($pixel1 >= 128) {
      $h = 1;
    } elseif ($pixel1 <= 127) {
      $w = 0;
    }

    echo $h . ' ' . $w . PHP_EOL;

?>
タイムアップ...