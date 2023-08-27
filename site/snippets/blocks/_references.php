<section class="_references"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?> in>
    <div class="ctn">
        <div class="content">
            <div class="prose">
                <?= $block->text()->kirbytext() ?>
            </div>
        </div>
        <ul class="refs">
            <?php $i = 0 ?>
            <?php foreach ($block->items()->toStructure() as $item): ?>
             <li>

                <hr>

                <?php if ($title = $item->title()): ?>
                <a href="<?= $item->url() ?>"><?= $title ?></a>
                <?php endif ?>

                <?php if ($subtext = $item->subtext()): ?>
                <sub><?= $subtext ?></sub>    
                <?php endif ?>

             </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>