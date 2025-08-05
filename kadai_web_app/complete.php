<?php
  // セッションを開始
  session_start();

  // セッションに保存された「社員名」を取得
  $name = isset($_SESSION['employee_name']) ? $_SESSION['employee_name'] : '名無し';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="PHPの基礎を学ぼう-課題-">
  <title>社員情報_送信完了画面</title>
</head>
<body>
  <h1>登録が完了しました。</h1>
  <p>社員情報がデータベースに保存されました。</p>
  <button id="back-btn" onclick="location.href='form.php';">戻る</button>
</body>
</html>

<!-- localhost/php-basic-kadai/kadai_web_app/complete.php -->