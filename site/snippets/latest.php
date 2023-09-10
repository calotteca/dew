<?php $lg = $kirby->languageCode() ?? 'en' ?>
<section id="latest">
    <h2>Latest</h2>
    <ul hx-get="/<?= $lg ?>/latest/journal:<?= $journal ?>" hx-trigger="load, latest from:body"></ul>
</section>
