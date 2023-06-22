<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use Inertia\Response;

class AppController extends Controller
{
    public static function index(): Response
    {
        return Inertia::render('Index', [
            'title' => 'CodeLegion',
        ]);
    }
}
