<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Model/Movie.php";
?>

<section class="container py-5">
    <h2 class='text-white'>Movies</h2>
    <div class="row gy-4">
        <?php
        foreach ($movies as $movie) {
            $movie->showCard();
        }
        ?>
    </div>
</section>

<?php
include __DIR__ . "/Views/footer.php";
?>