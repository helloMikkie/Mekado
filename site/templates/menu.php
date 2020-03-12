<?php snippet('header') ?>
<body>

    <header>
        <nav class="content-menu">
            <?php foreach($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>

            <?php endforeach ?>
        </nav>

    </header>

<?php snippet('comp-menu') ?>

<?php snippet('footer') ?>