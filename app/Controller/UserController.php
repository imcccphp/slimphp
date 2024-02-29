<?php

namespace App\Controller;

class UserController
{
    public function index()
    {
        echo 'User Index Page';
    }

    public function show($request, $userId)
    {
        echo $request;
        echo 'User"' . $userId . '" Page';
    }

    public function create()
    {
        echo 'User Create Page';
    }
}
