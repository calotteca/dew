<?php $lg = $kirby->languageCode() ?? 'en' ?>
<section id="queue" hx-get="/<?= $lg ?>/queue/journal:<?= $journal ?>" hx-trigger="load, tik from:body">
</section>