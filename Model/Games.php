<?php

include __DIR__ . "/Product.php";
class Game extends Product
{
    private int $appid;
    private string $name;
    private int $playtime;
    private string $image;


    function __construct($id, $title, $playtime, $cost, $quantity)
    {
        $this->appid = $id;
        $this->name = $title;
        $this->playtime = $playtime;
        $this->image = "https://cdn.cloudflare.steamstatic.com/steam/apps/$id/header.jpg";
        $this->cost = $cost;
        $this->quantity = $quantity;
    }

    public function printCard()
    {
        $image = $this->image;
        $title = $this->name;
        $playtime = $this->playtime;
        $cost = $this->cost;
        $quantity = $this->quantity;
        include __DIR__ . "/../Views/card.php";
    }
}

$gameString = file_get_contents(__DIR__ . "/games_db.json");
$gameArray = json_decode($gameString, true);
$games = [];



foreach ($gameArray as $game) {
    $games[] = new Game($game['appid'], $game['name'], $game['playtime_forever'], $game['cost'], rand(0, 150));
}
?>