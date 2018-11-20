<?php
//親クラス 全メニューのデータ

class Menu{

  private $name;
  private $price;
  private $image;
  private $popular;
  protected static $count;

  public function __construct($name,$price,$image,$popular){
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->popular = $popular;
    self::$count++;
  }

  public function getName(){
    return $this->name;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getImage(){
    return $this->image;
  }
  public function getPopular(){
    return $this->popular;
  }
  public static function getCount(){
    return self::$count;
  }

  public function selectMenu($menus,$name){
    foreach($menus as $menu){
      if($menu->getName() == $name){
        return $menu;
      }
    }
  }

  public function getReview($reviews){
    $menuReviews =array();
    foreach($reviews as $review){
      if($review->getSelectMenu() == $this->name){
        $menuReviews[] =$review;
      }
    }
    return $menuReviews;
  }

  public function getArea($areas,$name){

    foreach($areas as $area){
      if($area->getSelectMenu() == $name){
        return $area;
      }
    }

  }
}
?>
