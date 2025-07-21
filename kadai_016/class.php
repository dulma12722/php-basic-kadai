<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="kadai_class">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>
<body>
  <p>
    <?php
      // Foodクラスの定義
      class Food {

        // プロパティの定義
        public $name;
        public $price;

        // コンストラクタの定義（インスタンスの初期化）
        public function __construct(string $name, int $price) {
          // 初期化の内容
          $this->name = $name;
          $this->price = $price;
        }

        // メソッドの定義
        public function show_price() {
          // 一連の処理
          echo $this->price . '<br>';
        }
      }

      // --Foodクラス----------------------------------------------
      // インスタンス化
      $vegetables = new Food('potato' , 250);
      // インスタンス$vegetablesの各プロパティの値を出力する（プロパティへのアクセス）
      print_r($vegetables);
      // 改行
      echo '<br>';
      // メソッドへのアクセス
      $vegetables->show_price();
      // ----------------------------------------------Foodクラス--

      // Animalクラスの定義
      class Animal {

        // プロパティの定義
        private $name;
        private $height;
        private $weight;

        // コンストラクタの定義（インスタンスの初期化）
        public function __construct(string $name, int $height, int $weight) {
          // 初期化の内容
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        // メソッドの定義
        public function show_height() {
          // 一連の処理
          echo $this->height . '<br>';
        }
      }

      // --Animalクラス----------------------------------------------
      // インスタンス化
      $dogs = new Animal('dog' , 60 , 5000);
      // プロパティへのアクセス
      print_r($dogs);
      // 改行
      echo '<br>';
      // メソッドへのアクセス
      $dogs->show_height();
      // ----------------------------------------------Animalクラス--
    ?>
  </p>
</body>
</html>

<!-- localhost/php-basic-kadai/kadai_016/class.php -->