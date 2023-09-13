<section id="actions">
    <h2>Actions</h2>
    <ul>
        <li>
            <a class="action" href="#nutrition-modal">🍼</a>
        </li>
        <li>
            <button 
            class="action" 
            hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('sleep') ?>" 
            hx-swap="none">
            💤
            </button>
        </li>
        <li>
            <button 
            class="action"
            hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('play') ?>" 
            hx-swap="none">
            🧸
            </button>
        </li>
    </ul>
</section>
