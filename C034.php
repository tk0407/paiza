<?php
    $input_value = trim(fgets(STDIN));
    $code = array('\r\n','\r','\n');
    $value = str_replace($code, '', $input_value);
    $values = explode(' ', $value);

    $num1 = $values[0]; // 2
    $form1 = $values[1]; // + or -
    $num2 = $values[2]; // 1
    $equal = $values[3]; // =
    $answer = $values[4]; // 3

    // var_dump($num1);
    // var_dump($form1);
    // var_dump($num2);
    // var_dump($equal);
    // var_dump($answer);

    if ($answer == "x" && $form1 == "+") {
      $result = $num1 + $num2;
    } elseif ($answer == "x" && $form1 == "-") {
      $result = $num1 - $num2;
    } elseif ($num2 == "x" && $form1 == "-") {
      $result = $num1 - $answer;
    } elseif ($answer == "x" && $form1 == "-") {
      $result = $num1 - $num2;
    } elseif ($num1 == "x" && $form1 == "+") {
      $result = $answer - $num2;
    } elseif ($num2 == "x" && $form1 == "+") {
      $result = $answer - $num1;
    } elseif ($num1 == "x" && $form1 == "-") {
      $result = $answer + $num2;
    }
    echo $result . PHP_EOL;
?>
タイムアップだが、これで100%アンサー

間違えた原因はif文の=の理解が甘かった。

※間違い: if($answer = "x" && $form1 = "+")
↓↓↓
※正解: if($answer == "x" && $form1 == "+")
