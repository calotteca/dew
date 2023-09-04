<?php
$q = get('q');
if ($q) {
    $journal = $kirby->page(base64_decode($q));
    if ($journal) {
        if (!is_null($journal)) {
            $kirby->impersonate('kirby');
            $activity = $journal->createChild(
                [
                    'slug'      => time() . '-' . Str::random(6),
                    'template'  => 'activity',
                    'isDraft'   => false,
                    'content'   => [
                        'key'      => 'demo',
                        'startDate'    => date("Y-m-d H:i:s"),
                        'end'      => date("Y-m-d H:i:s")
                    ]
                ]
            );
            echo "✅";
        } else {
            echo "👾";
        }
    }
}
?>
