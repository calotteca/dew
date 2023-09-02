<?php
$q = get('q');
if ($q) {
    $targetJournal = base64_decode($q);
    $journal = $kirby->page($targetJournal);
    if ($journal) {
        if (!is_null($journal)) {
            $kirby->impersonate('kirby');
            $activity = $journal->createChild(
                [
                    'slug'     => time() . '-' . Str::random(6),
                    'template' => 'activity',
                    'isDraft'  => false,
                    'content'  => [
                        'key' => 'demo',
                        'start' => date("Y-m-d H:i:s")
                    ]
                ]
            );
        }
    }
}
echo 'Activity Start';
?>
