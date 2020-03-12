<article class="service with-sidebar bg-black ">
    <div class="container">
        <div>
            <h2 class="intro-headline intro-headline-uc service-category"><?= $part->service() ?></h2>
        </div>
        <div class="service-text">
    <?php foreach($part->item()->toStructure() as $item): ?>
            <h3 class="service-category"><?= $item->heading() ?></h3>
            <?= $item->text()->kt() ?>
    <?php endforeach ?>
    </div>
    </div>
</article>