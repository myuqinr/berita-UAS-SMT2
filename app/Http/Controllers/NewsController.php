<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);

        if(is_admin()){
            $datas = [
                'title' => 'Berita',
                'news' => News::all()
            ];
        }else{
            $datas = [
                'title' => 'Berita',
                'news' => $user->berita
            ];
        }


        return view('dashboard.news.index', $datas);
    }

    public function create(){
        $datas = [
            'title' => 'Tambah Berita',
            'categories' => Category::all()
        ];

        return view('dashboard.news.create', $datas);
    }

    public function store(StoreNewsRequest $request){
        $data = $request->validated();

        $file = $data['sampul'];
        $fileName = Str::random(30). time().'.'. $file->getClientOriginalExtension();

        $file->storeAs('uploaded/berita', $fileName, 'public');

        $status = News::create([
            'judul' => $data['judul'],
            'slug' => Str::slug($data['judul']),
            'sampul' => $fileName,
            'konten' => $data['konten'],
            'id_kategori' => $data['id_kategori'],
            'id_user' => Auth::user()->id
        ]);

        if($status){
            return redirect()->back()->with('status-success', 'Berhasil membuat berita.');
        }else{
            return redirect()->back()->with('status-success', 'Gagal membuat berita.');
        }
    }

    public function edit($id){
        $datas = [
            'title' => ' Edit Berita',
            'categories' => Category::all(),
            'data' => News::find(Crypt::decrypt($id))
        ];

        return view('dashboard.news.edit', $datas);
    }

    public function update(UpdateNewsRequest $request, $id){
        $data = $request->validated();
        $news = News::find(Crypt::decrypt($id));

        $sampul = isset($data['sampul']) ? $data['sampul'] : NULL;

        if($sampul){
            $fileName = Str::random(30). time().'.'. $sampul->getClientOriginalExtension();
            $sampul->storeAs('uploaded/berita', $fileName, 'public');

            if(File::exists(storage_path('app/public/uploaded/berita/'.$news->sampul))){
                File::delete(storage_path('app/public/uploaded/berita/'.$news->sampul));
            }

            $status = $news->update([
                'judul' => $data['judul'],
                'id_kategori' => $data['id_kategori'],
                'sampul' =>$fileName,
                'konten' => $data['konten'],
            ]);
        }else{
            $status = $news->update([
                'judul' => $data['judul'],
                'id_kategori' => $data['id_kategori'],
                'konten' => $data['konten'],
            ]);
        }

        if($status){
            return redirect()->back()->with('status-success', 'Berhasil memperbarui berita.');
        }else{
            return redirect()->back()->with('status-success', 'Gagal memperbarui berita.');
        }
    }

    public function destroy(Request $request){
        $news = News::find(Crypt::decrypt($request->input('id_delete')));

        if(File::exists(storage_path('app/public/uploaded/berita/'.$news->sampul))){
            File::delete(storage_path('app/public/uploaded/berita/'.$news->sampul));
        }

        $status = $news->delete();

        if($status){
            return redirect()->back()->with('delete-status-success', 'Berhasil menghapus berita.');
        }else{
            return redirect()->back()->with('delete-status-success', 'Gagal menghapus berita.');
        }
    }
}