<section id="latest">
    <h2>Latest</h2>
    <ul 
    hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/latest/journal:<?= $journal ?>" 
    hx-trigger="load, latest from:body" 
    hx-indicator="#latest">
    </ul>
</section>
