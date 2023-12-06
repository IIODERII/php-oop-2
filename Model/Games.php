<?php

include __DIR__ . "/Product.php";
include __DIR__ . "/PrintCard.php";
class Game extends Product
{
    private int $appid;
    private string $title;
    private int $playtime;
    private string $poster_path;


    function __construct($id, $title, $playtime, $cost, $quantity)
    {
        $this->appid = $id;
        $this->title = $title;
        $this->playtime = $playtime;
        $this->poster_path = "https://cdn.cloudflare.steamstatic.com/steam/apps/$id/header.jpg";
        $this->cost = $cost;
        $this->quantity = $quantity;
    }

    use PrintCard;
}

$gameString = file_get_contents(__DIR__ . "/games_db.json");
$gameArray = json_decode($gameString, true);
$games = [];



foreach ($gameArray as $game) {
    $games[] = new Game($game['appid'], $game['name'], $game['playtime_forever'], $game['cost'], rand(0, 150));
}
?>