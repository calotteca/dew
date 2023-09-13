<section id="today">
    <h2>Today's summary</h2>
    <ul 
    hx-get="/<?= $kirby->languageCode() ?? 'en' ?>/today/journal:<?= $journal ?>" 
    hx-trigger="load, today from:body" 
    hx-indicator="#today">
    </ul>
</section>