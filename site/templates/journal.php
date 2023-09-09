<?php $lg = $kirby->languageCode() ?? 'en' ?>
<?php snippet('document', slots: true) ?>
<?php slot() ?>

<section id="actions">
    <ul>
        <li>
            <button class="action" hx-get="/<?= $lg ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('feed') ?>" hx-swap="none">🍼</button>
        </li>
        <li>
            <button class="action" hx-get="/<?= $lg ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('sleep') ?>" hx-swap="none">💤</button>
        </li>
        <li>
            <button class="action" hx-get="/<?= $lg ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('play') ?>" hx-swap="none">🧸</button>
        </li>
    </ul>
</section>

<section id="feed">
    <ul hx-get="/<?= $lg ?>/ended/journal:<?= base64_encode($page->uuid()) ?>" hx-trigger="load, tik from:body"></ul>
</section>

<?= snippet('queue', ['journal' => base64_encode($page->uuid())]) ?>

<?php endslot() ?>
<?php endsnippet() ?>
