<?php
    header('HX-Redirect: /');
    $name = get('name');
    $slug = Str::slug($name . '-' . Str::random(6));
    $user = $kirby->user();
    $kirby->impersonate('kirby');
    $journal = $kirby->site()->createChild(
        [
            'slug'      => $slug,
            'template'  => 'journal',
            'isDraft'   => false,
            'content'   => [
                'title' => $name,
                'owner' => $user->id()
            ]
        ]
    );
?>
