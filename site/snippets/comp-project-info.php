<section class="container">
    <table class="white project-info">
        <?php foreach ($part->item()->toStructure() as $item) : ?>
            <thead>
                <tr>
                    <th class="project-info-category"><?= $item->heading() ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="project-info-text" data-label="<?= $item->heading() ?>"><?= $item->text()->kt() ?></td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
</section>