<?php 
$user = $kirby->user();
$journals = $site->index()->filter(function($a) use($user) {
    return $a->owner()->toUsers()->has($user);
});
?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<section class="home_journals">
    <h1>Journals</h1>
    <ul>
        <?php foreach ($journals as $journal) : ?>
        <li>
            <a class="journal" href="<?= $journal->url() ?>">
                <?= $journal->title() ?>
            </a>
        </li>
        <?php endforeach ?>
        <li>
            <a class="create-new disabled">
                Create new
            </a>
        </li>
    </ul>    
</section>


<?php endslot() ?>
<?php endsnippet() ?>
