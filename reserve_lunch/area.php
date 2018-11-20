<?php


class Area{
  private $selectMenu;
  private $area;

  public function __construct($selectMenu,$area){
  $this->selectMenu = $selectMenu;
  $this->area = $area;
  }
  public function getSelectMenu(){
   return $this->selectMenu;
  }

  public function getArea(){
   return $this->area;
  }
}


?>
