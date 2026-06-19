<?php
echo '<h1>クラスの基礎</h1>';
// //useAクラスの定義
// class useA{
//     function helloPHP(){
//         echo 'こんにちは PHP';
//     }
// }
// //useBクラスの定義
// class useB{
//     function helloPHP(){
//         echo 'Hellow PHP';
//     }
// }
// //処理を実行する
// $useA = new useA;
// $useA->helloPHP();
// echo '<br>';


// $useB = new useB;
// $useB->helloPHP();
// echo '<br>';


class dog
{
  private $voice = 'ワン';
  function Cry()
  {
    echo $this->voice, '<br>';
  }
  //変数を変更するメソッド
  function setVoice($vo)
  {
    $this->voice = $vo;
  }
}
//インスタンスと実行
$dog = new dog;
$dog->Cry(); //ワン
//メソッドを変更する
$dog->setVoice('ワンワン');
$dog->Cry(); //ワンワン

class cat
{
  private $voise = "にゃー";
  function Cry()
  {
    echo $this->voise, "<br>";
  }
  function setVoice($vo)
  {
    $this->voise = $vo;
  }
}

//インスタンスと実行
$cat = new cat;
$cat->Cry(); //ワン
//メソッドを変更する
$cat->setVoice('にゃんにゃん');
$cat->Cry(); //ワンワン

class Crow
{
  private $voice = "カー";
  function Crow()
  {
    echo $this->voice, "<br>";
  }
  function setVoice($vo)
  {
    $this->voice = $vo;
  }
}
$Craow = new Crow;
$Craow->Crow();
$Craow->setVoice('カーカー');
$Craow->Crow();


class Calculator
{
  private $number = 0;
  function showNumber()
  {
    echo $this->number, "<br>";
  }
  function add($val)
  {
    $this->number += $val;
  }
}


$Calculator = new Calculator;
$Calculator->showNumber();
$Calculator->add(5);
$Calculator->showNumber();


class Car
{
  private $speed = 0;
  function showSpeed()
  {
    echo $this->speed . "<br>";
  }
  function speedUp($val)
  {
    $this->speed += $val;
  }
}

$Car = new Car;
$Car->showSpeed();
$Car->speedUp(40);
$Car->showSpeed();
