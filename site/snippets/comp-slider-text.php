<article class="slider-text">
    <div class="slider-text-slider">
    <?php foreach ($part->images() as $image) : ?>
        <img src="<?= $image->url() ?>" alt="plan">
        <?php endforeach ?>
        <div class="slider-nav">
            <img src="./assets/icons/arrow-left.svg" alt="left" class="icon-arrow">
            <p> 1/2</p>
            <img src="./assets/icons/arrow-right.svg" alt="" class="icon-arrow">

        </div>
    </div>
    <div class="slider-text-text">
        <h2> <?= $part->headline() ?></h2>
        <p><?= $part->text()->kt() ?></p>
    </div>

</article>