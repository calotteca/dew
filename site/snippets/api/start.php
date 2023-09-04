<?php
    $user = $kirby->user();
    $journal = $kirby->page(base64_decode(param('journal')));
    $kirby->impersonate('kirby');
    if ($journal->owner()->toUser()->has($user)) {
        $activity = $journal->createChild(
            [
                'slug'      => time() . '-' . Str::random(6),
                'template'  => 'activity',
                'isDraft'   => false,
                'content'   => [
                    'key'       => 'demo',
                    'startDate' => date("Y-m-d H:i:s")
                ]
            ]
        );
    }
    echo 'Start activity';
?>
