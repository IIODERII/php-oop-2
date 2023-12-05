<div class="col-12 col-md-4 col-lg-3">
    <div class="card h-100 bg-secondary">
        <?php if (isset($image)) { ?>
            <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
        <?php } ?>
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <?php if (isset($content)) { ?>
                <p class="card-text">
                    <?= $content ?>
                </p>
            <?php } ?>
            <?php if (isset($custom)) { ?>
                <div class="d-flex justify-content-between align-items-flex-start">
                    <?= $custom ?>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-between">
                <?php if (isset($generi)) { ?>

                    <ul>
                        <?php
                        foreach ($generi as $item) {
                            echo "<li> $item</li>";
                        }
                        ?>
                    </ul>
                <?php } ?>

            </div>
            <?php if (isset($writers)) { ?>
                <strong>Authors:</strong> <br>
                <?php
                foreach ($writers as $item) {
                    echo "<span class='badge text-bg-primary me-1 mb-1'> $item</span>";
                }
                ?>
            <?php } ?>
            <?php if (isset($lang)) { ?>
                <div class='w-25'>
                    <img src="<?= $lang ?>" alt="<?= $langName ?>" class='w-100'>
                </div>
            <?php } ?>

            <?php if (isset($playtime)) { ?>
                <span class="badge text-bg-primary">
                    <?= $playtime ?> hours played
                </span>
            <?php } ?>

            <div class='d-flex justify-content-between align-items-center pt-3'>
                <span class="badge text-bg-success">
                    $
                    <?= number_format($cost, 2, '. ', ''); ?>
                </span>

                <?php if (isset($pages)) { ?>
                    <span class="badge text-bg-warning">
                        <?= $pages ?> total pages
                    </span>
                <?php } ?>

                <span class="badge text-bg-danger">
                    <?= $quantity ?> in stock
                </span>
            </div>

        </div>


    </div>
</div>