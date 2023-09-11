<?php $lg = $kirby->languageCode() ?? 'en' ?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?= snippet('actions') ?>
<?= snippet('queue', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('latest', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('feed') ?>

<?php endslot() ?>
<?php endsnippet() ?>
