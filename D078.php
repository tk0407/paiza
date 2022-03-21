  自分でやって出来なかった
2行の配列はD078a.phpのやりかたで！
途中！　11/3までにトライ！

あなたは PAIZA 大学の 7 科目からなる入学試験を受けました。

7 つの科目はすべて 100 点満点のテストで、平均点が合格点以上なら合格します。

あなたの 7 科目それぞれの点数と合格点が与えられるので、合格する場合は"pass"を、不合格の場合は"failure"を出力してください。


今回は行が２行なので、下記のコードでできる
<?php
    $input_lines1 = trim(fgets(STDIN)) ;
    $input_lines2 = trim(fgets(STDIN)) ;
    $code = array('\r\n','\r','\n');
    $s = str_replace($code, '', $input_lines1);

    $res= explode(' ',$s);
    $result = ($res[0] + $res[1] + $res[2] + $res[3] + $res[4] + $res[5] + $res[6]);
    $b = ($result / 7);

    if ($b >= $input_lines2) {
      echo "pass";
    } else {
      echo "failure"
    }
  ?>
<?php
      $input_lines1 = trim(fgets(STDIN)) ;
      $input_lines2 = trim(fgets(STDIN)) ;

      // echo $input_lines1; . ' : ' . $input_lines2 . PHP_EOL;

      var_dump($input_lines1);
      var_dump($input_lines2);

    // for ( $i = 0; $i < $input_lines; $i++) {
    //   $s = trim(fgets(STDIN));
    //   $s = str_replace(array("\r\n","\r","\n"), '', $s);
    //   $s = explode(",", $s);
    //   echo "hello = ".$s[0]." , world = ".$s[1]."\n";
    //   }


    // $code = array('\r\n','\r','\n');
    // $s = str_replace($code, '', $input_lines);
    // $res= explode(' ',$s);
    // $result = ($res[0] + $res[1] + $res[2] + $res[3] + $res[4] + $res[5] + $res[6]);
    // $b = ($result / 7);
    // if ($b >= $res[7]) {
    //   echo "pass";
    // } else {
    //   echo "failure";
    // }
?>
