<div>
    <img src="<?= $part->image()->url() ?>" alt="Test">
    <ul class="hero-caption">
    <?php foreach($part->team()->toStructure() as $name): ?>
        <li ><?= $name->name() ?></li>
    <?php endforeach ?>
    </ul>
</div>