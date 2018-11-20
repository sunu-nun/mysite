<?php
require_once('menu.php');
require_once('review.php');
require_once('area.php');
//メニューのインスタンス作成

$menu1 = new Menu('サバサンド',600,'img/food1.jpg','4');
$menu2 = new Menu('ナスとトマトパスタ',700,'img/food2.jpg','3');
$menu3 = new Menu('特性からあげ定食',900,'img/food3.jpg','5');
$menu4 = new Menu('週替わりのデザート',400,'img/dessert1.jpg','3');

$menus = array($menu1,$menu2,$menu3,$menu4);

$review1 = new Review($menu1->getName(),'サバが新鮮で美味しいです。また買います～！');
$review2 = new Review($menu2->getName(),'トマトがすごくジューシーでした');
$review3 = new Review($menu2->getName(),'酸味が強いかも');
$review4 = new Review($menu3->getName(),'これが一番好きです');
$review5 = new Review($menu3->getName(),'皮もサクサクで何個でもいけます！');
$review6 = new Review($menu4->getName(),'今週のミニドーナツ美味しそう～！');

$reviews = array($review1,$review2,$review3,$review4,$review5,$review6);

$area1 =new Area($menu1->getName(),'渋谷区 新宿区 中野区 杉並区 ');
$area2 =new Area($menu2->getName(),'渋谷区 新宿区');
$area3 =new Area($menu3->getName(),'渋谷区のみ');
$area4 =new Area($menu4->getName(),'渋谷区 港区');

$areas = array($area1,$area2,$area3,$area4);
?>
