<?php
// 文字化け対策（HTML側をUTF-8で宣言）
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>foreach練習</title>
  <style>
    body { font-family: system-ui, sans-serif; line-height: 1.9; font-size: 20px; }
  </style>
</head>
<body>

<?php
// Step2: 連想配列を作成
$user = [
  'id'   => 1,
  '名前' => '侍太郎',
  '年齢' => 30
];

// Step3: foreachでキーと値を「：」で区切って、要素ごとに改行して出力
foreach ($user as $key => $value) {
  echo $key . '：' . $value . "<br>\n";
}
?>

</body>
</html>
