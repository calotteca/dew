<site-menu role="menu">
    <header>
        <button class="btn close" title="<?= t('close') ?>" data-menu-toggle><?= t('close') ?></button>
    </header>
    <nav>
        <?php foreach ($site->menu()->toStructure() as $a): ?>
        <a class="link" href="<?= $a->url() ?>"><?= $a->label() ?></a>
        <?php endforeach ?>
        <?= snippet('lang') ?>
    </nav>
</site-menu>