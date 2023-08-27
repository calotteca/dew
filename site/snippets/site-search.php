<site-search>
    <div class="veil"></div>
    <input 
    type="text" 
    name="q" value="" 
    placeholder="<?= t('search for anything') ?>" 
    autocomplete="off"
    hx-trigger="keyup changed delay:0.25s"
    hx-get="/<?= $kirby->languageCode() ?>/search"
    hx-target="site-search .results"
    hx-indicator="site-search">
    <div class="results">
        <div class="noresult">
            <?= asset('assets/svg/explore.svg')->read() ?>
            <?= t('start typing') ?> ...
        </div>
    </div>
</site-search>
