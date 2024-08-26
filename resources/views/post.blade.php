<x-home-layout>
  <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <h1 class="h2 mb-3">Detail Post  <strong>{{ $post->title }}.</strong></h1>
                

                <!-- Post Metadata -->
              
                   
                <p class="text-muted">By <a href="#"
                class="text-decoration-none">{{ $post->user->name }}</a> |
                {{ $post->created_at->diffForHumans() }}</p>
                  
                   @if(Session::has('pesan'))
                    <div class="row mt-3 ">
                      <div class="col-md-8">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> {!! Session::get('pesan')!!}
                     
                        </div>
                      </div>
                    </div>
                    @endif
               
                  
                <!-- Post Image -->
                <img src="{{ asset($post->image) }}" class="img-fluid rounded
                mb-4" alt="Post Image" width="700" height="350">
                <br />
                

                Post Content:
                {!! $post->content !!}
                
                <div class="mt-4">
                <a href="/posts"> &laquo; Kembali </a>
                  </div>
                

                <!-- Comments Section -->
              
                <div class="mt-5">
                    <h4>Comments</h4>
                    <hr>
                    @if($post->comments->isEmpty())
                      <h4 class="text-secondary">Belum ada komentar di postingan ini!</h4>
                    @else
                    <!-- Example Comment -->
                      @foreach($comments as $comment)
                      <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                              <img src="{{ asset('profile.jpeg') }}" width="50"alt="User
                              Image" class="rounded-circle mr-3">
                          </div>
                          <div class="flex-grow-1 ms-3">
                              <h5>{{ $comment->user->name }}</h5>
                              <p class="text-muted">{{ $comment->created_at->diffForHumans()  }}</p>
                              <p>{{ $comment->content }}</p>
                          </div>
                      </div>
                      @endforeach
                   
                   
                    @endif
                </div>
                
                <hr>
                
                @if(!Auth::check())
                  <div class="mt-3">
            <a href="/login" class="text-primary fw-bold text-decoration-none">Anda harus login
            dahulu sebelum berkomentar!!!</a>
        </div>
                @else
                
                <div class="comment-section">
                    <h4>Tulis Komentar!!</h4>
                    <form class="comment-form" action="{{route('comments.store',
                    $post->slug)}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="comment" class="form-label">Komentar
                            anda</label>
                            <textarea class="form-control @error('content')
                            is-invalid @enderror" id="comment" rows="4"
                            placeholder="Tulis isi komentar disini..."
                            name="content"></textarea>
                            
                            @error('content')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Komentar</button>
                    </form>
                </div> 
            </div>
            @endif

            <!-- Sidebar -->
            
        </div>
  
</x-home-layout>