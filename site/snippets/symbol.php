<?php 
    $symbol = null;
    switch ($key) {
        case 'sleep':
            $symbol = '💤';
            break;
        case 'bottle':
            $symbol = '🍼';
            break;
        case 'left-breast':
            $symbol = '⬅️';
            break;
        case 'right-breast':
            $symbol = '➡️';
            break;
        case 'solid-food':
            $symbol = '🍲';
            break;
        case 'play':
            $symbol = '🧸';
            break;
    }
?>
<?= $symbol ?>