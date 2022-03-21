<?php
    $input_lines = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines);

    if ($s == 'candy' ||  $s == 'chocolate') {
      echo "Thanks!" . PHP_EOL;
    } else {
      echo "No!" . PHP_EOL;
    }
?>

<!-- Trick or Treat! ハロウィーンのシーズンです。あなたの子供はわがままなのでお菓子といってもキャンディかチョコレートでないと満足してくれません。

文字列が与えられるので、これが "candy" か "chocolate" であれば "Thanks!"、その他の場合は "No!" という子供のリアクションを出力してください。

例)
candy → Thanks!
chocolate → Thanks!
icecream → No!
senbei → No! -->