<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="kadai_sort">
  <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>
<body>
  <p>
    <?php

    // 配列に値を格納
    $array = [15, 4, 18, 23, 10];

    // 関数を定義 ----------------------------------------------------------------------------
    function sort_2way($array,$order) {
      
      if ($order) {

        echo "昇順にソートします<br>";
        // 昇順の出力 - 配列の要素を昇順[TRUE]に並び替え
        sort($array);

      } else {

        echo "降順にソートします<br>";
        // 降順の出力 - 配列の要素を降順[FALSE]に並び替え
        rsort($array);

      }

      // 配列$arrayの要素を1つずつ順番に出力する（配列名：$array、変数名：$num） 
      foreach ($array as $num) {
        echo $num . '<br>';
      }
    }
    // ---------------------------------------------------------------------------- 関数を定義

    // 出力、『1』がTRUE、『0』がFALSE
    echo sort_2way($array,1);
    echo '<hr>';
    echo sort_2way($array,0);   

    ?>
  </p>
</body>
</html>

<!-- localhost/php-basic-kadai/kadai_sort/sort.php -->