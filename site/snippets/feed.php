<activity-modal id="feed">
    <h2>Feeding</h2>
    <ul class="actions">
        <li>
            <button class="action" hx-get="/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('left-breast') ?>" hx-swap="none">⬅️</button>
        </li>
        <li>
            <button class="action" hx-get="/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('right-breast') ?>" hx-swap="none">➡️</button>
        </li>
        <li>
            <button class="action" hx-get="/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('bottle') ?>" hx-swap="none">🍼</button>
        </li>
        <li>
            <button class="action" hx-get="/start/journal:<?= base64_encode($page->uuid()) ?>/key:<?= base64_encode('solid-food') ?>" hx-swap="none">🍲</button>
        </li>
    </ul>
    <button class="close">◀︎ Back</button>
</activity-modal>