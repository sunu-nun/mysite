<?php


class Review{
  private $selectMenu;
  private $review;

  public function __construct($selectMenu,$review){
  $this->selectMenu = $selectMenu;
  $this->review = $review;
  }
  public function getSelectMenu(){
   return $this->selectMenu;
  }

  public function getReview(){
   return $this->review;
  }
}


?>
