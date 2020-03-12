<?php snippet('header') ?>

<body>

    <header>
        <nav>
            <?php foreach($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>

            <?php endforeach ?>
        </nav>

    </header>

  <?php foreach ($page->children()->listed() as $part) : ?>

      <?php snippet($part->intendedTemplate(), compact('part')) ?>

  <?php endforeach ?>


<?php snippet('footer') ?>
