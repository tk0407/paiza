<?php
// フライト中に退屈してしまったあなたは、持っているトランプを使用した簡単な遊びを考えました。
// この遊びでは 1 から 9 までの数字のカードのみを 4 枚使用します。
// ただし、この 4 枚の中で同じ数値のカードが重複する事もあります。
// ルールは以下の通りです。

// 4 枚のカードを横に並べます。
// 左から 2 枚のカード、右から 2 枚のカードをそれぞれ 2 ケタの整数とみなし、和を計算します。
// あらゆる並べ方を試し、和の最大値（最大スコア）を求めます。

// カード 4 枚に書かれた数が与えられるので、最大スコアを出力してください。
// 入力例 1 の 2, 9, 3, 8 の 4 枚を使う場合、以下の 12 通りの和の最大値 175 が最大スコアとなります。

// カードの 4 枚の並べ方は 4! = 24 通り存在しますが、足し算は順序に依存しないため、12 通りのみ考慮すればよいことに注意してください。
// たとえば、9, 2, 3, 8 の順で並べた場合のスコアは 92 + 38 = 130 となります。

// ・92 + 38 = 130
// ・92 + 83 = 175
// ・93 + 28 = 121
// ・93 + 82 = 175
// ・98 + 23 = 121
// ・98 + 32 = 130
// ・39 + 28 = 67
// ・38 + 29 = 67
// ・82 + 39 = 121
// ・89 + 23 = 112
// ・89 + 32 = 121
// ・83 + 29 = 112

// 自分の得意な言語で
// Let's チャレンジ！！
// 標準入力からの入力値を変数に代入します
$input = trim(fgets(STDIN));

// 取得した入力値を半角スペースで分解します
$inputs = explode(' ', $input);

// 単一行の入力の場合はこれだけで各入力値が配列の要素として使えます
// var_dump($input);
// var_dump($inputs);
$tmp = 0;
$total = ($inputs[0] . $inputs[1]) + ($inputs[2] . $inputs[3]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[0] . $inputs[1]) + ($inputs[3] . $inputs[2]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[1] . $inputs[0]) + ($inputs[2] . $inputs[3]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[1] . $inputs[0]) + ($inputs[3] . $inputs[2]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[0] . $inputs[2]) + ($inputs[1] . $inputs[3]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[0] . $inputs[2]) + ($inputs[3] . $inputs[1]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[2] . $inputs[0]) + ($inputs[1] . $inputs[3]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[2] . $inputs[0]) + ($inputs[3] . $inputs[1]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[0] . $inputs[3]) + ($inputs[1] . $inputs[2]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[0] . $inputs[3]) + ($inputs[2] . $inputs[1]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[3] . $inputs[0]) + ($inputs[1] . $inputs[2]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
$total = ($inputs[3] . $inputs[0]) + ($inputs[2] . $inputs[1]) . "\n";
if ($total > $tmp) {
    $tmp = $total;
}
echo $tmp;


// 問題：C051:カード並べ トロフィー CLEAR!
// 受験結果 受験言語： PHP 解答時間： 16分18秒 バイト数： 1800 Byte スコア： 100点
// 問題集計 受験者数： 27,603人 正解率： 89.42％ 平均解答時間： 19分50秒 平均スコア： 74.36点 
// 難易度： 1499 ±2