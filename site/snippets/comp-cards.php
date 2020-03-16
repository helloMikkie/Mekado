<div class="grid-container">

<!-- Blog-Cards -->
    <?php if ($part->layout() == 'purple') : ?>
        <?php foreach ($part->images() as $image) : ?>
            <article class="blog-cards purple">
                <div class="blog-card-image">
                <img src="<?= $image->bw()->url() ?>" alt="Image">
            
                </div>
                    <p class="blog-cards-date"><?= $image->date()->toDate('d.m.Y') ?></p>
                    <p class="blog-cards-text"><?= $image->teaser() ?></p>

                    
            </article>
        
        <?php endforeach ?>



    <?php elseif ($part->layout() == 'white') : ?>
        <?php foreach ($part->images() as $image) : ?>
            <article>
                <img src="<?= $image->url() ?>" alt="Image">
                    <p><?= $image->date()->toDate('d.m.Y') ?></p>
                    <p><?= $image->teaser() ?></p>

            </article>
        <?php endforeach ?>


<!-- Project-Cards -->


    <?php elseif ($part->layout() == 'black') : ?>
        <?php foreach ($part->images() as $image) : ?>
            <article class="project-card">
            <div class="project-card-image">
                <img src="<?= $image->url() ?>" alt="Image" >
                <img src="assets/icons/ikon-fullscreen.svg" alt="ikon-fullscreen" class="ikon-fullscreen">
            </div>
                <h3 class="project-card-title"><?= $image->project() ?></h3>
            </article>
        <?php endforeach ?>
    <?php endif ?>

</div>