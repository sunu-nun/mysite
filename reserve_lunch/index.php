<?php
require_once('menu.php');
require_once('data.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reserve Lunch</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>

  <body>
    <div class="menu-wrapper">
      <h1 class="site-name">Reserve Lunch</h1>
      <p>軽食から定食までお好みのランチを予約できるサイト</p>
      <?php $tomorrow = date('m月d日', strtotime('+1 day'))?>
      <h2 class="menu-heading">明日<?php echo $tomorrow?>のメニュー: <?php echo Menu::getCount()?>品</h2>

      <!-- メニュー表示-->
      <form method="post" action="confirm.php">
        <div class="menu-objects">
          <?php foreach($menus as $menu):?>
            <div class="menu-object">
              <!-- メニュー画像-->
              <img src="<?php echo $menu->getImage()?>" class="menu-image">
              <!-- メニューの人気度-->
              <p class="menu-popular">人気度<?php echo $menu->getPopular()?></p>
              <!-- メニュー名-->
              <a class="menu-name" href="show.php?name=<?php echo $menu->getName()?>">
              <?php echo $menu->getName()?></a>
              <!-- メニューの値段-->
              <p class="menu-price"><?php echo $menu->getPrice()?>円(税込み)</p>
                <!-- 入力フォーム-->
                <input type="text" value="0" name="<?php echo $menu->getName()?>"><span>個</span>
              </div>
            <?php endforeach?>
        </div>
          <!-- 送信ボタン-->
          <input type="submit" value="予約する">
        </form>

      </div>
    </body>
</html>
