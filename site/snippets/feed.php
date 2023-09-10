<?php $lg = $kirby->languageCode() ?? 'en' ?>
<section id="feed">
    <h2>Feed</h2>
    <ul hx-get="/<?= $lg ?>/feed/journal:<?= $journal ?>" hx-trigger="load, tik from:body"></ul>
</section>
