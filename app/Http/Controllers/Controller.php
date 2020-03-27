<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $menu = 'home';
        return view('home/index', compact('menu'));
    }

    public function aboutme() {
        $menu = 'aboutme';
        return view('aboutme/index', compact('menu'));
    }

    public function portfolio() {
        $menu = 'portfolio';
        return view('portfolio/index', compact('menu'));
    }

    public function contact() {
        $menu = 'contact';
        return view('contact/index', compact('menu'));
    }
}
