<?php
trait PrintCard
{
    public function showCard()
    {
        $image = $this->poster_path;
        $title = $this->title;
        if (isset($this->content)) {
            $content = substr($this->overview, 0, 100) . "...";
        }
        if (isset($this->getVote)) {
            $custom = $this->getVote();
        }
        if (isset($this->generi)) {
            $generi = $this->generi;
        }
        if (isset($this->flagPath) && isset($this->lang)) {
            $lang = $this->flagPath();
            $langName = $this->lang;
        }
        if (isset($this->writers)) {
            $writers = $this->writers;
        }
        if (isset($this->pages)) {
            $pages = $this->pages;
        }
        if (isset($this->playtime)) {
            $playtime = $this->playtime;
        }
        $cost = $this->cost;
        $quantity = $this->quantity;
        include __DIR__ . "/../Views/card.php";
    }
}
?>