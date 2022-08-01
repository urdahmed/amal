<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $Sliders = [
            ["txt" => "دروس لجميع المستويات", "img" => "img1.jpg"],
            ["txt" => "دورات تكوينية", "img" => "img2.jpg"],
            ["txt" => "انشطة ثقافية", "img" => "img3.jpg"],
        ];
        return view('home.index', ['sliders' => $Sliders]);
    }
}
