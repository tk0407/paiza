<?php
// エレベーターが一定の距離を動くと、定期点検をしなければなりません。
// エレベーターの動きのログをもとに、エレベーターが何階分の距離を動いたか計算するプログラムを完成させてください。
// ただし、エレベーターは最初は必ず 1 階にいるものとします。
// 入力される値
// 入力は以下のフォーマットで与えられます。

// N
// f_1
// ...
// f_N
// ・1 行目にログの行数を示す整数 N が入力が与えられます。
// ・続く N 行にエレベーターが止まった階 f_i (1 ≦ i ≦ N) が整数で順に入力されます。
// ・入力は合計で N+1 行であり、最終行の末尾に改行が 1 つ入ります。
// 期待する出力
// エレベーターが何階分を動いたかを整数で出力してください。


// // 複数行の場合
$input_line = trim(fgets(STDIN));
for ($i = 0; $i < $input_line; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n", "\r", "\n"), '', $s);
    $s = explode(" ", $s);
    // echo "hello = ".$s[0]." , world = ".$s[1]."\n";
    $moved[] = $s[0];
}
// N行表示するログの数
// echo($input_line);
// ログ自体
// var_dump($moved);
$total = ($moved[0] - 1);
// echo($total."\n"); 
for ($i = 0; $i < $input_line - 1; $i++) {
    $total += abs($moved[$i] - $moved[$i + 1]);
    // echo($total)."\n";
}

echo ($total);

// 問題：C049:【ぱいじょ！コラボ問題】エレベーター トロフィー CLEAR!
// 受験結果 受験言語： PHP 解答時間： 36分26秒 バイト数： 642 Byte スコア： 80点
// 問題集計 受験者数： 28,316人 正解率： 82.74％ 平均解答時間： 15分17秒 平均スコア： 81.19点 
// 難易度： 1317 ±2