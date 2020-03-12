<?php snippet('header') ?>
<body>

    <header>
        <nav class="content-menu">
            <?php foreach($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>

            <?php endforeach ?>
        </nav>

    </header>

<main>

<!-- Menu -->

<div class="header">
    <ul class="header-links purple">
      <li><a href="#" class="purple logo"><?= $site->title() ?></a></li>
      <li >Blog</li>
    </ul>
    <ul class="header-links ">
      <li><a href="#" class="purple menu">Menu</a></li>
      <li class="menu-burger"><a href="#"><img src="assets/icons/burger-purple.svg" alt="menu" ></a></li>
      <li><a href="#" class="purple language-toggle">de</a></li>
    </ul>
</div>

<!-- Content -->

  <?php foreach ($page->children()->listed() as $part) : ?>

      <?php snippet($part->intendedTemplate(), compact('part')) ?>

  <?php endforeach ?>
  </main>

<?php snippet('footer-blog') ?>
