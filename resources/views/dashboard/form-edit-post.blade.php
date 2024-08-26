<x-dashboard-layout>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard/posts">Post</a></li>
      <li class="breadcrumb-item active" aria-current="page">edit</li>
    </ol>
  </nav>
  <h1 class="h2">Edit Post</h1>
  <p>
    Halaman Edit post untuk mengubah postingan.
  </p>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold
        text-primary">Post Edit Form</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('dashboard.post.edit', $post->slug) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class=" @error('title') is-invalid @enderror form-control" id="judul" name="title"
          placeholder="Masukan judul post" value="{{ $post->title }}" autofocus>
          @error('title')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Gambar</label>
          <input type="file" class="  @error('image') is-invalid @enderror form
          form-control" id="formFile" name="image">
          @error('image')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Konten</label>
          <input id="content" type="hidden" name="content" value="{{
          $post->content  }}">
          <trix-editor input="content"></trix-editor>
          
          @error('content')
          <div style="color: red;">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefalut();
    });
  </script>

</x-dashboard-layout>