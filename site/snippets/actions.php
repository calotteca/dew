<?php $lg = $kirby->languageCode() ?? 'en' ?>
<section id="actions">
    <h2>Actions</h2>
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
