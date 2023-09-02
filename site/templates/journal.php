<?php snippet('document', slots: true) ?>
<?php slot() ?>
    <?php foreach ($page->days() as $day) : ?>
        <div class="day">
            <?= $day->date()->toDate("YYYY/LLLL/dd") ?>
        </div> 
    <?php endforeach ?>
<?php endslot() ?>
<?php endsnippet() ?>
