<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div>
    <input type="text" name="title" placeholder="Masukkan judul" value="{{ old('title',optional($post ?? null)->title) }}">
</div>

@error('title')
    <div>{{ $message }}</div>
@enderror

<div>
    <textarea name="content" placeholder="Masukkan konten">{{ old('content',optional($post ?? null)->content) }}
    </textarea>

@error('content')
    <div>{{ $message }}</div>
@enderror
</div>
<div>

    <input class="btn btn-outline-secondary" type="submit" value="Create" name="submit"/>
    </div>
            </div>
        </div>
    </div>
</div>
