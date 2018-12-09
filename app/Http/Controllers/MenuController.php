<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = data('menu');
        return view('front.menu.index', ['menu' => $menu]);
    }

    public function mains()
    {
        return view('front.menu.show', ['section' => data('menu.mains')]);
    }

    public function appetizers()
    {
        return view('front.menu.show', ['section' => data('menu.appetizers')]);
    }

    public function desserts()
    {
        return view('front.menu.show', ['section' => data('menu.desserts')]);
    }

    public function drinks()
    {
        return view('front.menu.show', ['section' => data('menu.drinks')]);
    }
}
