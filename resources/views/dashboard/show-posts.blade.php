<x-dashboard-layout>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard/posts">Posts</a></li>
      
    </ol>
  </nav>
  <h1 class="h2">All Posts</h1>
  <p>
    Semua postingan dari author <span class="text-primary">{{ Auth::user()->name }}.</span>
  </p>
  
        @if(Session::has('pesan'))
      <div class="row mt-3 ">
        <div class="col-md-8">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {!! Session::get('pesan')!!}
       
          </div>
        </div>
      </div>
      @endif
      
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Posts
        Table</h6>
    </div>

    <div class="card-body">
        @if($posts->isEmpty())
                <p class="text-center">Anda belum membuat postingan!!!</p>
            @else
          <div class="col-md-6 col-lg-6  mb-3">
          
        
    </div>
            
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NO</th>
              <th>Judul</th>
              <th>Konten</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>NO</th>
              <th>Judul</th>
              <th>Konten</th>
              <th>Detail</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td width="1">{{ $loop->iteration }}</td>
              <td width="150">{{ $post->title }}</td>
              <td width="max">{{ Str::limit(strip_tags($post->content, '100')) }}</td>
              <td><a href="/dashboard/post/{{ $post->slug }}">detail</a></td>
             
            </tr>
          @endforeach
          </tbody>
        </table>
        {{ $posts->links() }}
      </div>
      @endif
    </div>
  </div>





</x-dashboard-layout>