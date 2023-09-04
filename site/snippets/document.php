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
        <div id="view" class="<?= $page->template() ?>">
            <?= $slot ?>
        </div>
        <?= snippet('indicator') ?>
    </body>
</html>
