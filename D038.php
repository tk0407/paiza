<?php
    //D038 100点
    $input_lines = trim(fgets(STDIN));
    strrev($input_lines) ."\n";
    $ans = $input_lines * ($input_lines - 1) / 2;
    echo($ans) . PHP_EOL;
?>