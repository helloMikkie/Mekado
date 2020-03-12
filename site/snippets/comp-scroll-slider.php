
<section>
    <?php foreach ($part->images() as $image) : ?>
        <article class="slider-item">
            <img src="<?= $image->url() ?>" alt="Image">
        </article>
    <?php endforeach ?>
</section>