<?php 
    $lg = $kirby->languageCode() ?? 'en';
    $user = $kirby->user();
    if (!$user) {
        go('/panel');
}
?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?= snippet('actions') ?>
<?= snippet('queue', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('latest', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('nutrition-modal') ?>

<?php endslot() ?>
<?php endsnippet() ?>
