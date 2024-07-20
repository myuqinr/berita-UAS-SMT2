<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $datas = [
            'first' => News::first(),
            'bottom' => News::skip(1)->take(3)->get(),
            'right' => News::skip(4)->take(6)->get()
        ];

        return view('layouts.landing-page.index', $datas);
    }

    public function detail($slug){
        $datas = [
            'title' => 'Detail Berita',
            'data' => News::where('slug', '=', $slug)->first()
        ];

        return view('layouts.landing-page.detail', $datas);
    }
}