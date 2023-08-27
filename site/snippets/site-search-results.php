<?php $results = $site->search(get('q'))->listed()->paginate(24); ?>
<?php if (strlen(get('q')) < 1): ?>
<div class="noresult">
    <?= asset('assets/svg/explore.svg')->read() ?>
    <?= t('start typing') ?> ...
</div>
<?php elseif ($results->count() > 0): ?>
<?php foreach ($results->listed() as $result): ?>
<a class="result" href="<?= $result->url() ?>">
    <div class="title"><?= $result->title() ?></div>
    <div class="desc"><?= $result->seoDescription() ?></div>
    <div class="path"><?= $result->url() ?></div>
</a>
<?php endforeach ?>
<?php else: ?>
<div class="noresult">
    <?= asset('assets/svg/block.svg')->read() ?>
    <?= t('no results') ?>
</div>
<?php endif ?>
