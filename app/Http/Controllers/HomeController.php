<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an about page ...';
        $viewData['author'] = 'Developed by: Valeria Corrales Hoyos';

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact us - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['description'] = 'You can contact us through ...';
        $viewData['email'] = 'exampleapp@email.com';
        $viewData['address'] = '100 Flushcombe Road,Albury 2148';
        $viewData['phone'] = '+123 1002009';

        return view('home.contact')->with('viewData', $viewData);
    }
}
