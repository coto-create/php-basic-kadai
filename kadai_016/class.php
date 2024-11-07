<?php
// クラス（設計図）を定義する
class Food
{
  // プロパティ（変数）を定義する
  private $name;
  private $price;

  // メソッド（関数）を作成
  public function show_price()
  {
    echo $this->price . '<br>';
  }

  // コンストラクタを作成（インスタンスするために初期化）
  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
}

// クラス（設計図）を定義する
class Animal
{
  // プロパティ（変数）を定義する
  private $name;
  private $height;
  private $weight;

  // メソッド（関数）を作成
  public function show_height()
  {
    echo $this->height . '<br>';
  }

  // コンストラクタを作成（インスタンスするために初期化）
  public function __construct(string $name, int $height, int $weight)
  {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}

// インスタンスを作成(クラスを元にオブジェクトを作る)
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

// インスタンスを出力
print_r($food);
print_r($animal);

// メソッド（関数）へアクセス
echo '<br>';
$food->show_price();
$animal->show_height();
