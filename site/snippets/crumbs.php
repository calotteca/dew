<?php 
    $crumbs = $site->breadcrumb();
    $l = count($crumbs);
?>
<section id="crumbs" style="--l:<?= $l ?>;">
    <ol class="wrapper">
        <?php foreach($crumbs as $crumb): ?>
        <li style="--i:<?= $crumbs->indexOf($crumb)+1 ?>;">
            <a class="button" href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
            <?php $p = $site->find($crumb->id()) ?>
            <?php if ($p->template() == "note"): ?>
                <?= $p->date()->toDate("dd.MM.yyyy") ?>
            <?php else: ?>
            <?= html($crumb->title()) ?>
            <?php endif ?>
            </a>
        </li>
        <?php endforeach ?>
    </ol>
</section>
