<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Model/Books.php";
?>

<section class="container py-5">
    <h2 class='text-white'>Books</h2>
    <div class="row gy-4">
        <?php
        foreach ($books as $book) {
            $book->printCard();
        }
        ?>
    </div>
</section>

<?php
include __DIR__ . "/Views/footer.php";
?>