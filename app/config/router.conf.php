<?php

return
    [
    'GET' => [
        '/' => 'UserController@index',
        '/users/:num' => 'UserController@show',
    ],
    'POST' => [
        '/users' => 'UserController@create',
    ],
];
