<section class="_loop"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?> in>
    <div class="ctn">
        <?php if ($v = $block->video()->toFile()): ?>
        <video 
            autoplay 
            loop
            muted 
            playsinline 
            disableremoteplayback 
            fx="fadein"
            <?php if ($p = $block->poster()->toFile()): ?>
            poster="<?= $p->thumb(['format' => 'webp'])->url() ?>">
            <?php endif ?>
            <source src="<?= $v->url() ?>" type="video/mp4">
        </video>            
        <?php endif ?>
    </div>
</section>
