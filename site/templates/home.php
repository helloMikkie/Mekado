<?php snippet('header') ?>

<body>

    <header>
        <nav>
            <?php foreach($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>

            <?php endforeach ?>
        </nav>

    </header>

<?php snippet('footer') ?>