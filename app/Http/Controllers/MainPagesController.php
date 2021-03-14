<?php

namespace App\Http\Controllers;
use App\Main;

use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    public function index()
    {
        $main = Main::first();
        return view('pages.main',compact('main'));
    }

    public function update(Request $request)
    {
        return 'abc';
    }

}
