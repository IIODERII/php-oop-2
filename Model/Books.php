<?php

include __DIR__ . "/Product.php";
include __DIR__ . "/PrintCard.php";
class Book extends Product
{
    private int $id;
    private string $title;
    private int $pages;
    private string $overview;
    private string $poster_path;
    private array $writers;
    private array $generi;


    function __construct($id, $title, $pages, $overview, $writers, $generi, $image, $cost, $quantity)
    {
        $this->appid = $id;
        $this->title = $title;
        $this->pages = $pages;
        $this->overview = $overview;
        $this->writers = $writers;
        $this->generi = $generi;
        $this->poster_path = $image;
        $this->cost = $cost;
        $this->quantity = $quantity;
    }

    use PrintCard;
}

$bookString = file_get_contents(__DIR__ . "/books_db.json");
$bookArray = json_decode($bookString, true);
$books = [];



foreach ($bookArray as $book) {
    $books[] = new Book($book['_id'], $book['title'], $book['pageCount'], $book['longDescription'], $book['authors'], $book['categories'], $book['thumbnailUrl'], $book['cost'], rand(0, 150));
}
?>