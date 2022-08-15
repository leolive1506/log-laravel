<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function __invoke()
    {
        Log::channel('main')->info('Home view', ['info' => 'description']);
        return view('welcome');
    }
}
