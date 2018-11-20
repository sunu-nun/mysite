<?php
require_once('data.php');
require_once('review.php');
require_once('area.php');
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Reserve Lunch</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>

  <body>
    <div class="show-wrapper">
    <?php
      $selectMenu = $_GET['name'];
      $menu = Menu::selectMenu($menus,$selectMenu);
      $deliveryArea = Menu::getArea($areas,$selectMenu);
      $menuReviews = $menu->getReview($reviews);
    ?>
    <!-- メニューの画像-->
    <img src="<?php echo $menu->getImage()?>" class="show-image">
    <!-- メニュー名-->
    <p class="show-menu-name"><?php echo $selectMenu ?></p>
    <!-- メニューの値段-->
    <p class="show-price"><?php echo $menu->getPrice()?>円</p>
    <!-- 配達地域-->
    <p class="show-area">配達地域 :
      <?php echo $deliveryArea->getArea() ?>
    </p>
    <div class="show-menu-review">
    <h3>最近の口コミ</h3>
    <?php foreach ($menuReviews as $menuReview):?>
      <p><?php echo $menuReview->getReview() ?></p>
    <?php endforeach?>
  </div>
    <a href="index.php" class="back"><メニューに戻る></a>
    </div>
  </body>
</html>
