<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>配列のソート（自作関数）</title>
</head>
<body>
<pre>
<?php
/**
 * 2 通りの順序で配列をソートして表示する関数
 * @param array $array  ソート対象
 * @param bool  $order  true=昇順 / false=降順
 * @return array ソート済みの配列（必要に応じて利用）
 */
function sort_2way(array $array, bool $order = true): array
{
    if ($order === true) {
        echo "昇順にソートします。\n";
        $sorted = $array;   // 元配列を壊さないようコピー
        sort($sorted);      // 昇順（キーは振り直し）
    } else {
        echo "降順にソートします。\n";
        $sorted = $array;
        rsort($sorted);     // 降順（キーは振り直し）
    }

    // 1 行ずつ表示
    foreach ($sorted as $n) {
        echo $n . "\n";
    }

    echo "\n";              // 区切りの空行
    return $sorted;
}

// ---- テストデータ ----
$nums = [15, 4, 18, 23, 10];

// 昇順
sort_2way($nums, true);

// 降順
sort_2way($nums, false);
?>
</pre>
</body>
</html>
