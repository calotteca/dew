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
<?php if ($activities->count() > 0) : ?>
<?php foreach ($activities as $activity) : ?>
<queue-card data-ts="<?= strtotime($activity->startDate()) ?>">
    <div class="symbol">
        <?= snippet('symbol', ['key'=>$activity->key()]) ?>
    </div>
    <div class="infos">
        <div class="key"><?= $activity->key() ?></div>
        <div class="startedby">
            <span>Started by:</span>
            <?= $activity->startedBy()->toUser()->nameOrEmail() ?>
        </div>
    </div>
    <div class="dot"></div>
    <div class="time">00:00</div>
    <button 
    class="action"
    title="Stop" 
    hx-get="/<?= $lg ?>/end/journal:<?= base64_encode($journal->uuid()) ?>/activity:<?= base64_encode($activity->uuid()) ?>" 
    hx-swap="none">
        <img src="<?= asset('assets/svg/stop.svg')->url() ?>">
    </button>
</queue-card>
<?php endforeach ?>    
<?php else: ?>
<div class="noresult">(ﾉ☉ヮ⚆)ﾉ ⌒*:･ﾟ✧</div>
<?php endif ?>