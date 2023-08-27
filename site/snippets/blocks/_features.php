<section class="_features"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?> in>
    <div class="ctn">
        <?php foreach ($block->items()->toStructure() as $item): ?>
        <article>
            <?php if ($pic = $item->picture()->toFile()): ?>
            <figure class="<?= $block->size()->or('icon') ?>">
            <?= snippet('img', ['image'=>$pic]) ?>
            </figure>
            <?php endif ?>
            <h3 class="h3"><?= $item->title() ?></h3>
            <p><?= $item->text() ?></p>
        </article>
        <?php endforeach ?>
    </div>
</section>
