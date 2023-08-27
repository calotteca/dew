<?php date_default_timezone_set('America/Toronto'); ?>

<!DOCTYPE html>
<html lang="<?= $kirby->languageCode() ?? 'fr' ?>">
    <head>
        <?= snippet('meta') ?>        
        <?= snippet('assets') ?>
        <?= snippet('favicon') ?>
        <?= snippet('manifest') ?>
        <meta name="htmx-config" content='{"includeIndicatorStyles": false, "scrollBehavior":"auto"}'>
        <?= snippet('user-scripts') ?>
    </head>
    <body class="top" hx-boost="true" hx-indicator="body" hx-swap="innerHTML swap:0s settle:0s">
        <?php if (!$site->maintenance()->toBool() or $user?->isLoggedIn()): ?>
        <div id="page" class="<?= $page->template() ?>">
            <?= snippet('site-header') ?>
            <?= $slot ?>
            <?= snippet('site-footer') ?> 
            <?= snippet('site-menu') ?>
            <?= snippet('site-search') ?>
            <?= snippet('indicator') ?>
        </div>
        <?php else:?>
            <?= snippet('site-maintenance') ?>
        <?php endif ?>
    </body>
</html>
