
<?php snippet('document', slots: true) ?>
<?php slot() ?>
<section>
    <h1>Ended (<?= $page->title() ?>)</h1>
    <button hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/start/journal:<?= base64_encode($page->uuid()) ?>">Start activity</button>
    <div hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/ended/journal:<?= base64_encode($page->uuid()) ?>" hx-trigger="every 1s"></div>
</section>

<section>
    <h2>Started</h2>
    <div hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/started/journal:<?= base64_encode($page->uuid()) ?>" hx-trigger="every 1s"></div>
</section>

<?php endslot() ?>
<?php endsnippet() ?>
