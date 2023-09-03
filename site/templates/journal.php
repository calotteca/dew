<?php 
    $activities = $page->children()->template('activity');
?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>
<section>
    <h1><?= $page->title() ?></h1>
    <button hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/start?q=<?= base64_encode($page->uuid()) ?>">Start Activity</button>
    <ul>
        <?php foreach ($activities as $activity) : ?>
        <li>
            <?= $activity->date()->toDate("YYYY/MM/dd") ?>
        </li> 
        <?php endforeach ?>
    </ul>
</section>
<?= snippet('queue') ?>
<?php endslot() ?>
<?php endsnippet() ?>
