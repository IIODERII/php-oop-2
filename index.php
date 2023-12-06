<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Model/Movie.php";
?>

<section class="container py-5">
    <h2 class='text-white'>Movies</h2>
    <div class="row gy-4 text-white py-3">
        <?php
        foreach ($movies as $movie) {
            try {
                $movie->showCard();
            } catch (Exception $e) {
                echo '<div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 bg-secondary">
                    <div class="alert alert-danger h-100 m-0 d-flex align-content-center text-center"><span>Eccezione: ' . $e->getMessage() . '</span></div>
                    </div>
                    </div>';
            }
        }
        ?>
    </div>
</section>

<?php
include __DIR__ . "/Views/footer.php";
?>