<?php

namespace App\Controllers;

class Voting extends BaseController
{
    public function index()
    {
        return view('voting');
    }
}