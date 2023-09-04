<?php $lg = $kirby->languageCode() ?? 'en' ?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>

<section id="activities">
    <h2>Activities</h2>
    <ul>
        <li>
            <button hx-get="/<?= $lg ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('feed') ?>" hx-swap="none">[Feed]</button>
        </li>
        <li>
            <button hx-get="/<?= $lg ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('sleep') ?>" hx-swap="none">[Sleep]</button>
        </li>
        <li>
            <button hx-get="/<?= $lg ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('play') ?>" hx-swap="none">[Play]</button>
        </li>
    </ul>
</section>

<section id="feed">
    <ul hx-get="/<?= $lg ?>/ended/journal:<?= base64_encode($page->uuid()) ?>" hx-trigger="every 1s"></ul>
</section>

<section id="queue">
    <h2>queue</h2>
    <div hx-get="/<?= $lg ?>/queue/journal:<?= base64_encode($page->uuid()) ?>" hx-trigger="every 1s"></div>
</section>

<?php endslot() ?>
<?php endsnippet() ?>
