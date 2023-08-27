<?php
    if($user = $kirby->user()) {
        $user->logout();
    }
    go('/');    
?>
