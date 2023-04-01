<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Models\BlogPost;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //dipakai untuk menampilkan seluruh data
    public function index()
    {
        //menampilkan seluruh data dari BlogPost
        return view('posts.index', ['post' =>BlogPost::all()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        //validasi data
        $validated = $request->validated();

        //simpan data ke database
        $post = BlogPost::create($validated);

        //flash massage
        session()->flash('status', 'Sukses menambah postingan baru');

        //redirect ke halaman show
        return redirect()->route('posts.show', ['post'=>$post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //dipakai untuk menampilkan satu data
    public function show($id)
    {
        //menampilkan satu data berdasarkan id
        return view('posts.show', ['post' => BlogPost::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //implementasi fungsi edit data
        return view('posts.edit', ['post' => BlogPost::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        //eksekusi update data
        //pastikan data yang akan di-update ada
        $post = BlogPost::findOrFail($id);

        //tampilkan sebuah array/himpunan data yang telah tervalidasi
        $validated = $request->validated();

        //isi object $post dengan data yang telah tervalidasi, dan simpan ke database
        $post->fill($validated);
        $post->save();

        //flash massage
        session()->flash('status', 'Sukses update data');

        //pindah ke halaman posts/show/{id}
        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi untuk hapus data
        //temukan data yang akan dihapus
        $post = BlogPost::findOrFail($id);

        //hapus data
        $post->delete();

        //flash massage
        session()->flash('status', 'Sukses hapus data');

        //pindah ke halaman index
        return redirect()->route('posts.index');

        
    }
}
