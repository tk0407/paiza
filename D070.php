<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    echo $s . PHP_EOL;
?>

あなたは本を読んでいたところ、残り何ページか知りたくなりました。
本の総ページ数 m と読み終えたページ n が入力されるので、残りのページ数を表示してください

Times up
