@extends('layouts.app')
@section('title', 'Tambah postingan baru')

@section('content')
     <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <!-- menambahkan form dari file form.blade.php di folder partials yg berada di folder posts -->
        @include('posts.partials.form')
       
     </form>
@endsection

