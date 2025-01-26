<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題016</title>
</head>

<body>
    <p>
       <?php
       class Food {
        // プロパティを定義
         private $name;
         private $price;

        //  コンストラクタの定義
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

        // 価格表示のメソッド
        public function show_price() {
          echo "{$this->price}";
        }
      }

      class Animal {
        // プロパティを定義
         private $name;
         private $height;
         private $weight;

        //  コンストラクタの定義
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        // 体長表示のメソッド
        public function show_height() {
          echo "{$this->height}";
        }
      }

      // インスタンス化する
      $food = new Food('potato', 250);
      $animal = new Animal('dog', 60, 5000);

      print_r($food);
      echo '<br>';

      print_r($animal);
      echo '<br>';

      echo $food->show_price();
      echo '<br>';

      echo $animal->show_height();
      ?>
    </p>  
</body>
</html>