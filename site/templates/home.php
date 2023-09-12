<?php 
$user = $kirby->user();
if (!$user) {
    go('/panel');
}
$journals = $site->index()->filter(function($a) use($user) {
    return $a->owner()->toUsers()->has($user);
});
?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<section class="home_journals">
    <h2>Welcome back <?= $user->nameOrEmail() ?>!</h2>
    <ul>
        <?php foreach ($journals as $journal) : ?>
        <li>
            <a class="action journal" href="<?= $journal->url() ?>">
                <?= $journal->title() ?>
            </a>
        </li>
        <?php endforeach ?>
        <li>
            <a class="action create not-allowed">
                +
            </a>
        </li>
    </ul>    
</section>

<?php endslot() ?>
<?php endsnippet() ?>
