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

    /* 昇順に並び替えのコード
    // 配列に値を格納
    $array = [15, 4, 18, 23, 10];

    // 配列の要素を昇順[TRUE]に並び替え
    sort($array);

    // 配列$arrayの要素を1つずつ順番に出力する
    // 配列名：$array、変数名：$num
    foreach ($array as $num) {
      echo $num . '<br>';
    }
    */

    // if文
    function sort_2way($order) {
      if ($order) {
        return "昇順にソートします<br>";
      } else {
        return "降順にソートします<br>";
      }
    }

    // 1がTRUE、0がFALSE
    echo sort_2way(1);

    ?>
  </p>
</body>
</html>

<!-- localhost/php-basic-kadai/kadai_sort/sort.php -->