<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php

    // 配列を定義
    $nums = [15, 4, 18, 23, 10];

    // 関数
    function sort_2way($array, $order)
    {

      // $orderがtrueなら
      if ($order === true) {
        echo '昇順にソートします。';
        echo '<br>';

        // 配列＄arrayを昇順に。配列$arrayを＄numとして出力
        sort($array);
        foreach ($array as $num) {

          echo "{$num} <br>";
        }

        // ＄orderがfalseなら
      } else {
        echo '降順にソートします。';
        echo '<br>';

        // 配列＄arrayを降順に。配列$arrayを＄numとして出力
        rsort($array);
        foreach ($array as $num) {
          echo "{$num} <br>";
        }
      }
    }

    // 配列$arrayに$numsを代入、引数$orderにtrueを入力
    sort_2way($nums, true);
    sort_2way($nums, false);
    ?>




  </p>
</body>

</html>