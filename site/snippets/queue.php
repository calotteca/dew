<section id="queue" hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/queue?q=<?= base64_encode($page->uuid()) ?>" hx-trigger="every 1s">

</section>
