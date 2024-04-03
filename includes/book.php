<?php


class Book
{
  public string $title;
  public string $author;
  public int $rating;
  public float $price;
  public int $quantity;




  public function __construct(string $title, string $author, int $rating, float $price, int $quantity) {
      $this->title = $title;
      $this->author = $author;
      $this->rating = $rating;
      $this->price = $price;
      $this->quantity = $quantity;
  }


  public function checkInStock(): string {
      if ($this->quantity > 0) {
          return "In Stock";
      } else {
          return "Out Of Stock";
      }
  }


  public function buy(): int {
   return --$this->quantity;
  }


  public function showRatingStars(): string {
      $stars = "";
      for ($i = 0; $i < 5; $i++) {
          if ($this->rating > 0) {
              $stars .= '<span class="fa fa-star checked"></span>';
              $this->rating--;
          } else {
              $stars .= '<span class="fa fa-star"></span>';
          }
      }
      return $stars;
  }
}




$books = [];




$books[0] = new Book("The Hunger Games", "Suzanne Collins", 5, 14.99, 1);
$books[1] = new Book("Catching Fire", "Suzanne Collins", 4, 13.99, 3);
$books[2] = new Book("'Mockingjay'", "Suzanne Collins", 3, 10.99, 5);


?>
