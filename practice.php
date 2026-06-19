<?php
//演習問題1：猫（Cat）クラス

class Cat
{
    private $voice = "にゃー";
    private $type = "アメリカンショートヘア";
    function cry()
    {
        echo $this->voice . "<br>";
    }
    function setVoice($vo)
    {
        $this->voice = $vo;
    }
    function showType()
    {
        echo  $this->type . "<br>";
    }
    function setType($ty)
    {
        $this->type = $ty;
    }
}

echo '演習問題1：猫（Cat）クラス<br>';
$cat = new Cat;
$cat->cry();
$cat->showType();
//値を変更
$cat->setVoice('にゃーニャー');
$cat->setType('ペルシャ (ネコ)');
//変更結果を表示
$cat->cry();
$cat->showType();

//演習問題2：カウンター（Counter）クラス
class Counter
{
    private $count = 0;
    function showCount()
    {
        echo "現在の値：" . $this->count . "<br>";
    }
    function increment()
    {
        $this->count += 1;
    }
}
echo '演習問題2：カウンター（Counter）クラス<br>';
$counter = new Counter;
$counter->showCount();
$counter->increment(); // +1
$counter->increment(); // +1
$counter->showCount();
$counter->increment(); // +1
$counter->increment(); // +1
$counter->increment(); // +1
$counter->showCount();



//演習問題3：長方形（Rectangle）クラス


class Rectangle
{

    private $width = 10;
    private $height = 20;
    function showArea()
    {
        echo "幅{$this->width} X 高さ{$this->height} = ";
        echo $this->width * $this->height . "<br>";
    }
    function setWidth($w)
    {
        $this->width = $w;
    }
    function setHeight($h)
    {
        $this->height = $h;
    }
}



$rectangle = new Rectangle;
$rectangle->showArea();
//値を変更
$rectangle->setWidth(100);
$rectangle->setHeight(30);
$rectangle->showArea();
