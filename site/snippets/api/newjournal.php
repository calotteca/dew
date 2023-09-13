<?php
    $name = get('name');
    $slug = Str::slug(Str::random(8));
    if ($kirby->site()->children()->findBy('slug', $slug)) {
        header('HX-Redirect: /error');
    } else {
        header('HX-Redirect: /');
    }
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
