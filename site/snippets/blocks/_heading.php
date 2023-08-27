<section class="_heading"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?> in>
    <div class="ctn">
        <h2>
            <?= $block->title() ?>
        </h2>
        <?php if ($block->links()->inNoteEmpty()): ?>
        <div class="links" in>
            <?php foreach ($block->links()->toStructure() as $l): ?>
            <a class="btn" href="<?= $l->url() ?>"><?= $l->label() ?></a>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </div>
</section>
