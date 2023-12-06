<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Model/Games.php";
?>

<section class="container py-5">
    <h2 class='text-white'>Games</h2>
    <div class="row gy-4">
        <?php
        foreach ($games as $game) {
            $game->showCard();
        }
        ?>
    </div>
</section>

<?php
include __DIR__ . "/Views/footer.php";
?>