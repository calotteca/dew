<section class="_carousel"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?>>
    <div class="ctn">
        <car-rousel delay="15000">
            <?php foreach ($block->items()->toStructure() as $item) : ?>
            <article>
                <figure>
                    <?= snippet('img', ['image' => $item->picture()->toFile()]) ?>
                </figure>
                <div class="content">
                    <button class="prev">Prev</button>
                    <button class="next">Next</button>
                    <h2><?= $item->title() ?></h2>
                    <p><?= $item->text() ?></p>
                </div>
            </article>
            <?php endforeach ?>
        </car-rousel>
    </div>
</section>
