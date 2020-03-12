<?php snippet('header') ?>
<body class="bg-black">

    <header>
        <nav class="content-menu">
            <?php foreach($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>

            <?php endforeach ?>
        </nav>

    </header>

<main>



  <div class="header">
    <ul class="header-links">
      <li><a href="#" class=" white logo"><?= $site->title() ?></a></li>
      <li class="">Work</li>
    </ul>
    <ul class="header-links">
      <li><a href="#" class="white menu">Menu</a></li>
      <li class="menu-burger"><a href="#"><img src="assets/icons/burger-white.svg" alt="menu" ></a></li>
      <li><a href="#" class="white language-toggle">de</a></li>
    </ul>
</div>
<div class="filter">
    <ul class="filter-projects">
      <li class="filter-active">All</li>
      <li>Urbanism</li>
      <li>Architecture</li>
      <li>Interior</li>
    </ul>
  </div>

  <?php foreach ($page->children()->listed() as $part) : ?>
  
      <?php snippet($part->intendedTemplate(), compact('part')) ?>
  
  <?php endforeach ?>
  </main>

<?php snippet('footer-projects') ?>
