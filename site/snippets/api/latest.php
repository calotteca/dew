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
<li>
    <div class="symbol">
        <?= snippet('symbol', ['key'=>$activity->key()]) ?>
    </div>
    <div class="infos">
        <div class="key"><?= $activity->key() ?></div>
        <div class="startedby">
            <span>Started by</span>
            <?= $activity->startedBy()->toUser()->nameOrEmail() ?>
        </div>
    </div>
</li>
<?php endforeach ?>
