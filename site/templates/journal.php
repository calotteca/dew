<?php $lg = $kirby->languageCode() ?? 'en' ?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?= snippet('actions') ?>
<?= snippet('queue', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('latest', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('nutrition-modal') ?>

<?php endslot() ?>
<?php endsnippet() ?>
