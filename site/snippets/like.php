<?php 
    if (get('target')) {
        $q = base64_decode(get('target'));
        if ($target = $kirby->page($q)) {
            $kirby->impersonate('kirby');
            $target->increment('likes');
            $target = $kirby->page($q);
            $likes = $target->likes()->or('0');     
            echo $likes;    
        }
   }
?>
