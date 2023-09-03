<?php
    $user = $kirby->user();
    $q = get('q');
    $journal = $kirby->page(base64_decode($q));
    $activities = null;
    if ($journal->owner()->toUser()->has($user)) {
        $activities = $journal->activities()->filterBy('end', '=', '');
    }


?>

<?php foreach ($activities as $activity) : ?>
    <?= $activity->title() ?>
<?php endforeach ?>
