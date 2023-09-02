<?php 
    $activities = $page->children()->template('activity');
?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>
    <h1><?= $page->title() ?></h1>

    <button hx-post="/start?q=<?= base64_encode($page->uuid()) ?>">Start Activity</button>

    <ul>
        <?php foreach ($activities as $activity) : ?>
        <li>
            <?= $activity->date()->toDate("YYYY/MM/dd") ?>
        </li> 
        <?php endforeach ?>
    </ul>
<?php endslot() ?>
<?php endsnippet() ?>
