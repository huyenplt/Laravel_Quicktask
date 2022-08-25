<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function changeLang($lang)
    {
        App::setLocale($lang);
        Session::put('website_language', $lang);

        return redirect()->back();
    }
}
