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
    <ul class="header-links">
      <li><a href="#" class=" black logo"><?= $site->title() ?></a></li>
      <li class="">About</li>
    </ul>
    <ul class="header-links">
      <li><a href="#" class="black menu">Menu</a></li>
      <li class="menu-burger"><a href="#"><img src="assets/icons/burger-black.svg" alt="menu" ></a></li>
      <li><a href="#" class="black language-toggle">de</a></li>
    </ul>
</div>
<div class="filter">
    <ul class="filter-projects">
      <li class="filter-active">Profile</li>
      <li>Service</li>
      <li>Team</li>
    </ul>
  </div>


<!-- Content -->
  <?php foreach ($page->children()->listed() as $part) : ?>

      <?php snippet($part->intendedTemplate(), compact('part')) ?>

  <?php endforeach ?>
  </main>

<?php snippet('footer-about') ?>
