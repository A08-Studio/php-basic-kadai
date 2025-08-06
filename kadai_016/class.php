<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
      <?php
      class Food {
          private $name;
          private $price;

          public function __construct($name, $price) {
              $this->name = $name;
              $this->price = $price;
          }

          public function show_price() {
              echo $this->price . "<br>";
          }
      }

      class Animal {
          private $name;
          private $height;
          private $weight;

          public function __construct($name, $height, $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
          }

          public function show_height() {
              echo $this->height . "<br>";
          }
      }

      // インスタンス作成（画像と同じ値）
      $food = new Food("potato", 250);
      $animal = new Animal("dog", 60, 5000);

      // インスタンス表示（プロパティが private のため、クラス名と [name:Class:private] 形式で出力される）
      print_r($food);
      echo "<br>";
      print_r($animal);
      echo "<br>";

      // メソッドから値を出力
      $food->show_price();   // → 250
      $animal->show_height(); // → 60
      ?>
  </p>
</body>

</html>