<?php 
    $symbol = null;
    switch ($key) {
        case 'sleep':
            $symbol = '💤';
            break;
        case 'feed':
            $symbol = '🍼';
            break;
        case 'play':
            $symbol = '🧸';
            break;
    }
?>
<?= $symbol ?>