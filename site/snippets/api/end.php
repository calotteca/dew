<?php
    header('HX-Trigger: latest, queue');
    $user = $kirby->user();
    $journal = $kirby->page(base64_decode(param('journal')));
    $activity = $journal->find(base64_decode(param('activity')));
    $kirby->impersonate('kirby');
    if ($journal->owner()->toUser()->has($user)) {
        $activity = $activity->update(
            [
                'endDate' => date("Y-m-d H:i:s"),
                'endedBy' => $user->id()
            ]
        );
    }
?>
