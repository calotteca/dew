<?php $lg = $kirby->languageCode() ?? 'en' ?>
<section id="queue">
<h2>In progress</h2>
<div hx-get="/<?= $lg ?>/queue/journal:<?= $journal ?>" hx-trigger="load, queue from:body" hx-indicator="#queue">

</div>
</section>