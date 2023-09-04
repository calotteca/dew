<?php
$lg = $kirby->languageCode() ?? 'en';
$user = $kirby->user();
$q = get('q');
$journal = $kirby->page(base64_decode(param('journal')));
if ($journal->owner()->toUser()->has($user)) {
    $activities = $journal->children();
    $activities = $activities->filter(function ($activity) {
        return empty($activity->endDate()->value());
    });
} else {
    echo 'you do not own this journal';
}
?>

<ul>
    <?php foreach ($activities as $activity) : ?>
    <li>
        <?= $activity->startDate()->toDate('HH:mm dd/MM/YYYY') ?>
        <button hx-get="/<?= $lg ?>/end/journal:<?= base64_encode($journal->uuid()) ?>/activity:<?= base64_encode($activity->uuid()) ?>">[end]</button>
    </li>
    <?php endforeach ?>    
</ul>
