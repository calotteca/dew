<?php
    $user = $kirby->user();
    $journal = $kirby->page(base64_decode(param('journal')));
    $isOwner = $journal->owner()->toUser()->has($user);
    if (!$isOwner) {
        return;
    }
    $activities = $journal->children();
    $activities = $activities->filter(function ($activity) {
        return $activity->endDate()->isNotEmpty();
    });
    $activities = $activities->sortBy('startDate', 'desc');
    $activities = $activities->paginate(6);
?>

<?php foreach ($activities as $activity) : ?>
<li><?= $activity->key() . ' - ' .  $activity->startDate() . ' to ' . $activity->endDate() ?></li>
<?php endforeach ?>
