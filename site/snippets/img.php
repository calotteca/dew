<?php if ($image): ?>
<img
    alt="<?= $image->alt() ?>"
    src="<?= $image->resize(300)->url() ?>"
    srcset="<?= $image->srcset('webp') ?>"
    width="<?= $image->resize(1800)->width() ?>"
    height="<?= $image->resize(1800)->height() ?>"
    loading="lazy">
<?php endif ?>