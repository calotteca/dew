<?php
    header('HX-Trigger: queue');
    $user = $kirby->user();
    $journal = $kirby->page(base64_decode(param('journal')));
    $key = base64_decode(param('key'));
    $kirby->impersonate('kirby');
    if ($journal->owner()->toUser()->has($user)) {
        $activity = $journal->createChild(
            [
                'slug'      => time() . '-' . Str::random(6),
                'template'  => 'activity',
                'isDraft'   => false,
                'content'   => [
                    'key'       => $key,
                    'startDate' => date("Y-m-d H:i:s"),
                    'startedBy' => $user->id()
                ]
            ]
        );
    }
?>
