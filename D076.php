<!-- 禁止ワード W と判定する文字列 S が改行区切りで順に与えられるので S に W が含まれている時は "NG" それ以外の場合は文字列 S をそのまま出力してください。 -->
<?php
$input_lines = trim(fgets(STDIN));

 if (strstr($input_lines, 'ngword')) {
  echo "NG";
 } else {
  echo $input_lines . PHP_EOL;
 }
?>