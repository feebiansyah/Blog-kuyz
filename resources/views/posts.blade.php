<x-home-layout>

    
  @section('header')
 <header class="custom-header text-dark py-5 mb-4">
    <div class="container d-flex flex-column align-items-center text-center">
        <h1 class="display-6 mb-3">Temukan Ide dan Inspirasi Terbaik di Sini!</h1>
        <p class="lead mb-4">Nikmati berbagai artikel pilihan yang kami sajikan khusus untuk Anda. Temukan wawasan yang menginspirasi dan bermanfaat di sini.</p>
        <form class="d-flex w-50 position-relative" action="{{
        route('posts.search') }}" method="get">
         
            <input class="form-control border-end-0 rounded-start-pill shadow-sm
            " type="search" placeholder="Cari artikel menarik..."
            aria-label="Search" name="search">
            <button class="btn btn-primary rounded-end-pill shadow-sm" type="submit">Cari</button>
              
        </form>
        @if(!Auth::check())
        <div class="mt-3">
            <small>Belum punya akun? <a href="/login" class="text-primary fw-bold">Daftar sekarang dan mulailah menjelajah!</a></small>
        </div>
        @endif
    </div>
</header>

  @endsection
  
  
   <div class="row">
            <!-- Post 1 -->
            @if($posts->isEmpty())
              
              <h3 class="text-center" >Maaf, saat ini belum ada postingan yang tersedia</h3>
              @else
            @foreach($posts as $post)
            
            <div class="col-md-4 mb-4">
              <div class="card shadow h-100">
                  <img src="{{ asset($post->image) }}"
                       class="card-img-top" alt="Post Image 1" width="350px"
                       height="200px">
                  <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">Oleh: {{ $post->user->name }}</p> <!-- Author added here -->
                      <p class="card-text">{{ Str::limit(strip_tags($post->content), 75) }}</p>
                  </div>
                  <div class="card-footer">
                      <a href="/post/{{ $post->slug }}" class="btn btn-primary read-more mb-2">Read More</a>
                  </div>
              </div>
          </div>

            @endforeach
          @endif
        </div>
        {{ $posts->links() }}
</x-home-layout>