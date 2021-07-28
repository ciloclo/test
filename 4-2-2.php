<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>kekka</title>
</head>
<body>
<h1>判定</h1>
<?php
    //変数の値の受け取り
    $php_w_text = $_POST["w_text"];
    $php_h_text = $_POST["h_text"];
?>

ウエスト：<?php echo $php_w_text; ?>
<hr>
身長：<?php echo $php_h_text; ?>
<hr>
<?php
if ($php_w_text/$php_h_text >= 0.5) {
echo "隠れ肥満です！";
} else {
echo "健康！";
}
?>
</body>
</html>
