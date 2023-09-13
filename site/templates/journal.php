<?php 
    $user = $kirby->user();
    if (!$user) {
        go('/panel');
}
?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?= snippet('journal-header') ?>
<?= snippet('journal-actions') ?>
<?= snippet('journal-queue', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('journal-latest', ['journal' => base64_encode($page->uuid())]) ?>
<?= snippet('journal-today', ['journal' => base64_encode($page->uuid())]) ?>

<?= snippet('nutrition-modal') ?>

<?php endslot() ?>
<?php endsnippet() ?>
