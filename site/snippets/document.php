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
        <div id="view" class="<?= $page->template() ?>">
            <?= $slot ?>
        </div>
        <?= snippet('indicator') ?>
        <?php else:?>
            <?= snippet('site-maintenance') ?>
        <?php endif ?>
    </body>
</html>
