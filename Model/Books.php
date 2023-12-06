<?php

include __DIR__ . "/Product.php";
class Book extends Product
{
    private int $id;
    private string $title;
    private int $pages;
    private string $content;
    private string $image;
    private array $writers;
    private array $categs;


    function __construct($id, $title, $pages, $content, $writers, $caths, $image, $cost, $quantity)
    {
        $this->appid = $id;
        $this->title = $title;
        $this->pages = $pages;
        $this->content = $content;
        $this->writers = $writers;
        $this->categs = $caths;
        $this->image = $image;
        $this->cost = $cost;
        $this->quantity = $quantity;
    }

    public function printCard()
    {
        $title = $this->title;
        $pages = $this->pages;
        $content = substr($this->content, 0, 100) . "...";
        $writers = $this->writers;
        $generi = $this->categs;
        $image = $this->image;
        $cost = $this->cost;
        $quantity = $this->quantity;
        include __DIR__ . "/../Views/card.php";
    }
}

$bookString = file_get_contents(__DIR__ . "/books_db.json");
$bookArray = json_decode($bookString, true);
$books = [];



foreach ($bookArray as $book) {
    $books[] = new Book($book['_id'], $book['title'], $book['pageCount'], $book['longDescription'], $book['authors'], $book['categories'], $book['thumbnailUrl'], $book['cost'], rand(0, 150));
}
?>