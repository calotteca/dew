<?php $lg = $kirby->languageCode() ?? 'en' ?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?= snippet('actions') ?>
<?= snippet('feed', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('queue', ['journal' => base64_encode($page->uuid())]) ?>

<?php endslot() ?>
<?php endsnippet() ?>
