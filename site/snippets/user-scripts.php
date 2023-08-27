<?php if ($scripts = $site->scripts()) : ?>
<?= $scripts ?>
<?php endif ?>
<?php if ($styles = $site->styles()) : ?>
<style>
    <?= $styles ?>
</style>
<?php endif ?>
