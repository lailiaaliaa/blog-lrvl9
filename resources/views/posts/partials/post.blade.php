{{-- menampilkan semua judul postingan --}}
{{-- beri warna beige pada postingan bernomor genap --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
@if($loop->even)
    <div >{{ $key }} . {{ $post->title }}</div>
@else
    <div class="mb-3" style="background-color: grey;">{{ $key }} . {{ $post->title }}</div>
@endif

{{-- membuat tombol utk edit dan hapus data --}}
<div class="mb-3">

<button type="button" href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-secondary">Edit</button>

    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
<br>
        <input class="btn btn-outline-secondary" type="submit" name="delete" value="Delete"/>
    </form>
</div>
            </div>
        </div>
    </div>
</div>
