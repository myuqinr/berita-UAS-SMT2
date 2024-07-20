<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $datas = [
            'title' => 'Dashboard',
            'jumlah_kategori' => Category::count(),
            'jumlah_berita' => News::count(),
        ];

        return view('dashboard.index', $datas);
    }
}