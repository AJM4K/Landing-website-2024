<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function home(): View
    {
        return view('components/layouts/app', ['title' => 'home' , 'nav' => 'home']);

    }
    public function services(): View
    {
        return view('components/layouts/app', ['title' => 'Home Page' , 'nav' => 'services']);

    }
    public function aboutUs(): View
    {
        return view('components/layouts/app', ['title' => 'Home Page' , 'nav' => 'about_us']);

    }

    public function changeLanguage($language)
    {




        if (in_array($language, ["en", "ar"])) {
            App::setLocale($language);
            Session::put('locale', $language);
        }else{
            App::setLocale("ar");
            Session::put('locale', 'ar');
        }

        return redirect()->back();
    }
}
