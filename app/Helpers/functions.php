<?php

function getAtualGuardLoggedIn() {
    $guards = [
        'alloom_customer_user',
        'alloom_user',
    ];

    foreach($guards as $guard) {
        if(auth()->guard($guard)->check()) {
            return $guard;
        }
    }

    return;
}
