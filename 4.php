<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>kyushu</title>
</head>
<body>
<h1>九州</h1>
<?php
//クラスPersonの定義
class prefecture{
    //プロパティ（メンバ変数)
    public $name;
    public $population;
    public $area;
    public $seat;
    public $num;
    //メソッド（メンバ関数）
    public function show_abstract($num){
        echo $this->name[$num]."の県庁所在地は".$this->seat[$num]."です．人口密度は".$this->population[$num]/$this->area[$num]."(人/平方キロメートル)です.<br>";
    }
}

//オブジェクトの生成
$me = new prefecture();

//プロパティの定義
$me->name = array("福岡県","熊本県","佐賀県");
$me->population = array(5109323,1748134,815164);
$me->area = array(4986.40,7409.35,2440.68);
$me->seat = array("福岡市","熊本市","佐賀市");

//メソッドのアクセス
for ($i = 0;$i < 3; $i++){
    $me->show_abstract($i);
}




?>
</body>
</html>
