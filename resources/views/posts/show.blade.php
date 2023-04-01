@extends('layouts.app')
@section('title','postingan')

@section('content')
{{ $post['title'] }}
<br/>
{{ $post['content'] }}
@endsection
