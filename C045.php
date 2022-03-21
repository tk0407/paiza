<?php
    // ターミナルで各フェーズごとに分けてやると確実にできる。
    // スタートとエンドと指定すれば配列をだしてくれるかんすうがある。
    $input_value = trim(fgets(STDIN));

    $code = array('\r\n','\r','\n');
    $value = str_replace($code, '', $input_value);

    $values = explode(' ', $value);

    $total = $values[0]; // 34
    $page_size = $values[1]; // 10
    $page_num = $values[2]; // 4

    $total_page_num = ceil($total / $page_size); // 3.4 → 4ページ
    // 切り上げ

    $endNo = $page_num * $page_size; // 40


    $startNo = $endNo - $page_size + 1; // 31

    if ($endNo > $total) {
      $endNo = $total;
    }

    // var_dump($startNo);
    // var_dump($endNo);
    // var_dump($totalRowNo);

    if ($page_num > $total_page_num) {
        echo "none".PHP_EOL;
    }else{
      for ($i=$startNo; $i < $endNo; $i++) {
          echo $i . ' ';
          // $j = $i;
          // if($j == $endNo){
          //   $result = $result . $i;
          // } else {
          //   $result = $result . $i . ' ';
          // }
      }
    }

    echo $i .PHP_EOL;
?>
100%完了！
気付き：100%通らなかった時はTerminalで考えられる事象を全て検証してみる。

