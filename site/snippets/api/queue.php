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
    $activities = $activities->sort('startDate', 'desc');
} else {
    retun;
}
?>

<?php foreach ($activities as $activity) : ?>
<queue-card data-ts="<?= strtotime($activity->startDate()) ?>">
    <div class="symbol">🦜</div>
    <div class="name"><?= $activity->key() ?></div>
    <div class="dot"></div>
    <div class="time">00:00</div>
    <button hx-get="/<?= $lg ?>/end/journal:<?= base64_encode($journal->uuid()) ?>/activity:<?= base64_encode($activity->uuid()) ?>" hx-swap="none">
        <img src="<?= asset('assets/svg/stop.svg')->url() ?>">
    </button>
</queue-card>
<?php endforeach ?>    
