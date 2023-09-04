<?php
$user = $kirby->user();
$q = get('q');
$journal = $q ? $kirby->page(base64_decode(get('q'))) : 'no journal found';
if ($journal->owner()->toUser()->has($user)) {
    $activities = $journal->children();
    $activities = $activities->filter(function ($activity) {
        return empty($activity->endDate()->value());
    });
} else {
    echo 'you do not own the journal';
}
?>

<?php foreach ($activities as $activity) : ?>
    <?= $activity->title() ?>
<?php endforeach ?>