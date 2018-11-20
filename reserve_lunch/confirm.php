<?php
require_once('data.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>注文確認</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>

  <body>
    <div class="order-wrapper">
      <h1>Thanks!</h1>
      <h2>注文確認</h2>
      <?php $totalPrice=0?>
        <?php foreach($menus as $menu):?>
          <?php
            $orderCount = $_POST[$menu->getName()];
            $orderPrice = $menu->getPrice()*$orderCount;
            $totalPrice += $orderPrice;
          ?>

        <p class="order-name">
          <?php echo $menu->getName()?>×<?php echo $orderCount?>個
        </p>
        <p class="order-price"><?php echo $orderPrice?>円</p>
        <?php endforeach?>
      <h3>合計金額 <?php echo $totalPrice?>円</h3>
      <a href="index.php" class="back"><メニューに戻る></a>
    </div>
  </body>
</html>
