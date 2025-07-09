<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="kadai_011">
  <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>
<body>
  <p>
    <?php

    // 連想配列の宣言
    $vegetables = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($vegetables as $key => $value) {
      echo "{$key}：{$value}" . '<br>';
    }

    ?>
  </p>
</body>
</html>

<!-- localhost/php-basic-kadai/kadai_011/foreach.php -->