<!-- 65点！もう少し考えよう！ -->
<?php
$input_lines = (fgets(STDIN)) ;

if (preg_match('/([\d\w])\1{1}/', $input_lines)) echo 'NG' ;
else echo 'OK' ;
?>