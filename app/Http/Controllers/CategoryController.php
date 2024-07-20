<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $datas = [
            'title' => 'Kategori',
            'datas' => Category::with('berita')->get(),
        ];

        return view('dashboard.categories.index', $datas);
    }

    public function create(){
        if(!is_admin()){
            abort(404);
        }

        $datas = [
            'title' => 'Tambah Kategori'
        ];

        return view('dashboard.categories.create', $datas);
    }

    public function store(CategoryRequest $request){
        $data = $request->validated();

        $status = Category::create([
            'nama' => $data['nama'],
            'slug' => Str::slug($data['nama']),
            'deskripsi' => $data['deskripsi'],
        ]);

        if($status){
            return redirect()->back()->with('status-success', 'Berhasil menambahkan kategori.');
        }else{
            return redirect()->back()->with('status-success', 'Gagal menambahkan kategori.');
        }
    }

    public function edit($id){
        if(!is_admin()){
            abort(404);
        }
        $datas = [
            'title' => 'Edit Kategori',
            'data' => Category::find(Crypt::decrypt($id))
        ];

        return view('dashboard.categories.edit', $datas);
    }

    public function update(CategoryRequest $request, $id){
        $data = $request->validated();

        $category = Category::find(Crypt::decrypt($id));
        $status = $category->update([
            'nama' => $data['nama'],
            'slug' => Str::slug($data['nama']),
            'deskripsi' => $data['deskripsi'],
        ]);

        if($status){
            return redirect()->back()->with('status-success', 'Berhasil memperbarui kategori.');
        }else{
            return redirect()->back()->with('status-success', 'Gagal memperbarui kategori.');
        }
    }

    public function destroy(Request $request){
        if(!is_admin()){
            abort(404);
        }

        $category = Category::find(Crypt::decrypt($request->input('id_delete')));

        if(count(News::where('id_kategori', '=', $category->id)->get()) != 0){
            return redirect()->back()->with(['data-not-null' =>'Kategori ini memiliki '. $category->berita->count(). ' berita, Jika anda menghapus kategori ini maka semua berita dengan kategori ini akan tanpa kategori.', 'id_kategori' => $category->id]);
        }

        $status = $category->delete();


        if($status){
            return redirect()->back()->with('delete-status-success', 'Berhasil menghapus kategori.');
        }else{
            return redirect()->back()->with('delete-status-success', 'Gagal menghapus kategori.');
        }
    }

    public function forceDestroy($id){

        if(!is_admin()){
            abort(404);
        }

        $news = News::where('id_kategori', '=', Crypt::decrypt($id))->get();
        foreach($news as $item){
            $item->update([
                'id_kategori' => NULL
            ]);
        }

        $status = Category::find(Crypt::decrypt($id))->delete();

        if($status){
            return redirect()->back()->with('delete-status-success', 'Berhasil menghapus kategori.');
        }else{
            return redirect()->back()->with('delete-status-success', 'Gagal menghapus kategori.');
        }
    }
}