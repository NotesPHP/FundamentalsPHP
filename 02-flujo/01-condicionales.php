<?php

$user = [
    'name' => 'lucas',
    'isAuth' => false
];

function enter($user){
    if (!$user['isAuth']) {
        return 'no puees entrar';
    }
    return 'puedes entrar';
}
///////////////////////
$result = enter($user);

echo $result;