<?php
// Step2: 10人分の点数
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

// Step3: 合計と平均
$total   = $score1 + $score2 + $score3 + $score4 + $score5
         + $score6 + $score7 + $score8 + $score9 + $score10;

$average = $total / 10;

// 小数1桁で出力
echo number_format($average, 1);
