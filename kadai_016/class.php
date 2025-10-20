<?php
// ---------- Food クラス ----------
class Food
{
    private string $name;
    private int $price;

    // つくるときに値を受け取り保存する（コンストラクタ）
    public function __construct(string $name, int $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }

    // 価格を表示するメソッド
    public function show_price(): void
    {
        echo $this->price . "\n";
    }
}

// ---------- Animal クラス ----------
class Animal
{
    private string $name;
    private int $height; // cm
    private int $weight; // g など

    // つくるときに値を受け取り保存する（コンストラクタ）
    public function __construct(string $name, int $height, int $weight)
    {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // 身長を表示するメソッド
    public function show_height(): void
    {
        echo $this->height . "\n";
    }
}

// ---------- インスタンス作成 & 出力 ----------
$food   = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

// それぞれの情報を print_r で表示（参考イメージの形式）
echo 'Food Object ';
print_r($food);
echo 'Animal Object ';
print_r($animal);

// メソッドの実行結果（価格と身長）を出力
$food->show_price();
$animal->show_height();
