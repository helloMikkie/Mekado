<!-- About: Jobs -->

<?php if($part->layout() == 'black'): ?>
    <section class="bg-black">
<article class="with-sidebar">
    <div class="container">
        <div>
            <?php if($part->headline()->isNotEmpty()): ?>
                <h2 class="intro-headline intro-headline-uc" ><?= $part->headline() ?></h2>
            <?php endif ?>
            <?php if($part->subheadline()->isNotEmpty()): ?>
                <h3 class="intro-subheadline" ><?= $part->subheadline()->kt() ?></h2>
            <?php endif ?>
            <div class="intro-sidebar-text">
            <?php if($part->sidebar_text()->isNotEmpty()): ?>
                <?= $part->sidebar_text()->kt() ?>
            <?php endif ?>
            </div>
        </div>
        <div class="intro-text">
            <?= $part->text()->kt() ?>
        </div>
    </div>
</article>
</section>

 <!-- Blog Detail -->

<?php elseif($part->layout() == 'purple'): ?>
    <section class="container">
    <article class="purple with-sidebar">
        <div>
            <div>
            <?php if($part->headline()->isNotEmpty()): ?>
            <h2 class="intro-headline" ><?= $part->headline() ?></h2>
            <?php endif ?>
            <?php if($part->subheadline()->isNotEmpty()): ?>
            <h3 class="intro-subheadline"  ><?= $part->subheadline()->kt() ?></h2>
            <?php endif ?>
            <?php if($part->sidebar_text()->isNotEmpty()): ?>
                <div class="intro-sidebar-text">
                    <?= $part->sidebar_text()->kt() ?>
                </div>
            <?php endif ?>
            </div>
            <div class="intro-text">
        <?= $part->text()->kt() ?>
    </div>
    </div>
</article>
</section>

<!-- About: Profile -->

<?php elseif($part->layout() == 'white'): ?>
    <section class="container">
    <article class=" black with-sidebar">
        <div>
            <div>
                <?php if($part->headline()->isNotEmpty()): ?>
                    <h2 class="intro-headline intro-headline-uc" ><?= $part->headline() ?></h2>
                <?php endif ?>
                <?php if($part->subheadline()->isNotEmpty()): ?>
                    <h3 class="intro-subheadline" ><?= $part->subheadline() ?></h2>
                <?php endif ?>
                <?php if($part->sidebar_text()->isNotEmpty()): ?>
                    <div class="intro-sidebar-text">
                        <?= $part->sidebar_text()->kt() ?>
                    </div>
                <?php endif ?>
                </div>
        <div class="intro-text">
            <?= $part->text()->kt() ?>
        </div>
    </div>
</article>
</section>
<?php endif ?>