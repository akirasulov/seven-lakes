<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    public function index()
    {
        return inertia()->render('Result', []);
    }
}
