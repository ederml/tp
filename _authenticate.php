<?php

function authenticate($username, $password) {
    $users = array(
        'danilo' => '123',
        'eder' => '123',

    );
    $result = array_key_exists($username, $users) && ($users[$username] == $password);

    return $result;
}
