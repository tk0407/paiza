<?php
   $input_lines = trim(fgets(STDIN));
   $code = array('\r\n','\r','\n');
   $s = str_replace($code, ‘’, $input_lines);

   $rock = 0;
   $scissors = 0;
   $paper = 0;

   $c = $s;

   for ($i=0; $i < $c; $i++) {
       $input_lines = trim(fgets(STDIN));
       $code = array('\r\n','\r','\n');
       $s = str_replace($code, ‘’, $input_lines);

       if($s == “rock”){
          $rock = $rock + 1;
       }elseif ($s == “scissors”) {
          $scissors = $scissors + 1;
       }elseif ($s == “paper”) {
          $paper = $paper + 1;
       }
   }
   if($paper>=1 && $scissors>=1 && $rock>=1){
       echo “draw”.PHP_EOL; // 引き分け
   }elseif ($paper == 0 && $scissors == 0) {
       echo “draw”.PHP_EOL; // 全員グーで引き分け
   }elseif ($rock == 0 && $scissors == 0) {
       echo “draw”.PHP_EOL; // 全員パーで引き分け
   }elseif ($paper == 0 && $rock == 0) {
       echo “draw”.PHP_EOL; // 全員チョキで引き分け

   }elseif ($paper == 0) {
       echo “rock”.PHP_EOL; // グーの勝ち
   }elseif ($rock == 0) {
       echo “scissors”.PHP_EOL; // チョキの勝ち
   }elseif ($scissors == 0) {
       echo “paper”.PHP_EOL; // パーの勝ち
   }
?>
kazu 100% answer