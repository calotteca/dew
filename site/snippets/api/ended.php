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
?>

<?php foreach ($activities as $activity) : ?>
<li><?= $activity->title() ?></li>
<?php endforeach ?>