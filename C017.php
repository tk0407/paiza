<?php
    $input_lines = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $parent = str_replace($code, '', $input_lines);
    $parent = explode(' ', $parent);

    $a = $parent[0];
    $b = $parent[1];
    $c = "";
    $d = "";

    $input_lines = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $c = str_replace($code, '', $input_lines);

    for ($i=0; $i < $c; $i++) {
        $input_lines = trim(fgets(STDIN)); // 一行ずつのデータが入る
        $code = array('\r\n','\r','\n');
        $results = str_replace($code, '', $input_lines);
        $child = explode(' ', $results);

        $c = $child[0];
        $d = $child[1];

        if ($a > $c) {
          echo "High" . PHP_EOL;
        } elseif ($a < $c) {
          echo "Low" . PHP_EOL;
        } elseif ($a == $c && $b < $d) {
          echo "High" . PHP_EOL;
        } elseif ($a == $c && $b > $d) {
          echo "Low" . PHP_EOL;
        }
    }

?>