<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="kadai_005">
  <title>テストの平均点を計算しようver配列</title>
</head>
<body>
  <p>
    <?php
    // 配列を初期化
    $score = [];
    
    //値を投入 
    $score[] = 80;
    $score[] = 60;
    $score[] = 55;
    $score[] = 40;
    $score[] = 100;
    $score[] = 25;
    $score[] = 80;
    $score[] = 95;
    $score[] = 30;
    $score[] = 60;
    
    // 配列の中身を確認（デバッグ）
    print_r($score);

    // 水平線で区切り
    echo '<hr>';

    // 合計用の変数を宣言
    $total_score = 0;

    // score配列の中身を数え、num変数へ代入する
    $num = count($score);

    // num変数の中身を確認（デバッグ）
    print_r($num);

    // 水平線で区切り
    echo '<hr>';

    // 配列の中身を繰り返し文を使って合計する
    // for文バージョン
    /* for( $i = 0; $i < $num; $i++){
      $total_score += $score[$i];
    } */

    // foreach文バージョン
    // score配列のkeyをval変数に格納する
    foreach( $score AS $key => $val){
      $total_score += $val;
    }

    // 平均用の変数を宣言しつつ、平均値をこの変数に代入する
    $avg = $total_score / $num;

    // 結果（平均値）を出力
    echo '平均点は' . $avg . '点です。';

    ?>
  </p>
</body>
</html>
<!-- localhost/php-basic-kadai/kadai_005/score2.php -->