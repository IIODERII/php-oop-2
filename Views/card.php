<div class="col-12 col-md-4 col-lg-3">
    <div class="card h-100 bg-secondary">
        <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
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
                <?php if (!empty($generi)) { ?>

                    <ul>
                        <?php
                        foreach ($generi as $item) {
                            echo "<li> $item->name</li>";
                        }
                        ?>
                    </ul>
                <?php } ?>
                <?php if (!empty($lang)) { ?>
                    <div class='w-25'>
                        <img src="<?= $lang ?>" alt="<?= $langName ?>" class='w-100'>
                    </div>
                <?php } ?>
            </div>

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

                <span class="badge text-bg-danger">
                    <?= $quantity ?> in stock
                </span>
            </div>

        </div>


    </div>
</div>