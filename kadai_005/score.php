<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="テストの平均点を計算しよう">
  <title>kadai_005</title>
</head>
<body>
  <p>
    <?php
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
    
    $score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    $avg = $score / 10;

    echo '平均点は' . $avg . '点です。';

    ?>
  </p>
</body>
</html>
<!-- localhost/php-basic-kadai/kadai_005/score.php -->