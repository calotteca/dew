<?php
    $title = $desc = $img = null;

    if ($page->shareTitle()->isNotEmpty()) {
       $title = shareTitle();
    } elseif (!$page->isHomePage()) {
        $title = $page->title() . " | " . $site->title();
    } else {
        $title = $site->title();
    }

    if ($page->shareDescription()->isNotEmpty()) {
        $desc = $page->shareDescription();
    }

     if ($pageImg = $page->shareImage()->toFile()) {
        $img = $pageImg->url();
    } elseif ($siteImg = $site->shareImage()->toFile()) {
        $img = $siteImg->url();
    }
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>
<meta name="description" content="<?= $desc ?>">
<meta property="og:title" content="<?= $title ?>" />
<meta property="og:description" content="<?= $desc ?>">
<meta property="og:type" content="website" />
<meta property="og:url" content="<?= $page->url() ?>" />
<meta property="og:image" content="<?= $img ?>" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $title ?>">
<meta name="twitter:description" content="<?= $desc ?>">
<meta name="twitter:image" content="<?= $img ?>">
<link rel="canonical" href="<?= $page->url() ?>">
