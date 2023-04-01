{{-- menggunakan template dari file app.blade.php di folder layouts --}}
@extends('layouts.app')
{{-- memberi judul pada posisi 'judul' --}}
@section('title', 'All blog posts')
{{-- menampilkan semua posts pada posisi isi --}}
@section('content')
    @forelse ($post as $key => $post)
    @include('posts.partials.post')
    @empty
        <p>Nothing to display</p>
    @endforelse
@endsection
