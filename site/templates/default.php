<?php 
$user = $kirby->user();
$journals = $site->index()->filter('owner', $user->uuid()->toString());
?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>
    <?= $journals->count() ?>
<?php foreach ($journals as $journal) : ?>
    <?= $journal->title() ?>
<?php endforeach ?>
<?php endslot() ?>
<?php endsnippet() ?>
