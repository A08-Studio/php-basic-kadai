<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
          
          // 昇順ソート
          if ($order === true) {
            sort($array);
            echo "昇順ソートにします：<br>";
          }

          // 降順ソート
          else {
            rsort($array);
            echo "降順ソートにします：<br>";
          }

          // 配列の要素を1つずつ出力
          foreach ($array as $value) {
            echo $value . "<br>";
          }
        }

        // テスト用配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        sort_2way($nums, true);

        // 降順ソート
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>