<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }
}
