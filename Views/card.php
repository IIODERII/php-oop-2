<div class="col-12 col-md-4 col-lg-3">
    <div class="card h-100 bg-secondary">
        <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <p class="card-text">
                <?= $content ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-start">
                <?= $custom ?>
                <div>
                </div>
            </div>
            <div class="d-flex justify-content-between">

                <ul>
                    <?php
                    foreach ($generi as $item) {
                        echo "<li> $item->name</li>";
                    }
                    ?>
                </ul>

                <div class='w-25'>
                    <img src="<?= $lang ?>" alt="<?= $langName ?>" class='w-100'>
                </div>
            </div>
            <div class='d-flex justify-content-between align-items-center pt-3'>
                <span class="badge text-bg-success">
                    $
                    <?= number_format($cost, 2, '. ', ''); ?>
                </span>

                <span class="badge text-bg-danger">
                    <?= $quantity ?> in stock
                </span>
            </div>

        </div>


    </div>
</div>