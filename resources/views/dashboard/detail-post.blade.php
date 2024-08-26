<x-dashboard-layout>
  
 
      
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                 <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard/posts">Posts</a></li>
                    <li class="breadcrumb-item active"
                    aria-current="page">Detail</li>
                  </ol>
                </nav>
                <h1 class="h2 mb-3">Detail Post Dari. <strong>{{ $post->title }}</strong></h1>
                

                <!-- Post Metadata -->
              
                   
                <p class="text-muted">By <a href="#"
                class="text-decoration-none">{{ Auth::user()->name }}</a> |
                {{ $post->created_at->diffForHumans() }}</p>
                  
                  
                    <div class="mb-3">
                    <a href="/dashboard/post/delete/{{ $post->slug }}" class="btn btn-danger">Hapus</a>
                    <a href="/dashboard/post/edit/{{ $post->slug }}" class="btn btn-warning">Edit</a>
                    </div>
                  
               
                  
                <!-- Post Image -->
                <img src="{{ asset($post->image) }}" class="img-fluid rounded
                mb-4" alt="Post Image" width="800" height="400">
                <br>
                

                Post Content:
                {!! $post->content !!}
                
                <div class="mt-4">
                <a href="/dashboard/posts"> &laquo; Kembali </a>
                  </div>
                

                <!-- Comments Section -->
              
                <div class="mt-5">
                    <h4>Comments</h4>
                    <hr>
                    @if($comments->isEmpty())
                      <h4 class="text-secondary">Belum ada komentar di postingan ini!</h4>
                    @else
                    <!-- Example Comment -->
                    @foreach($comments as $comment)
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('profile.jpeg') }}" width="50" alt="User
                            Image" class="rounded-circle mr-3">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>{{$comment->user->name}}</h5>
                            <p class="text-muted">{{$comment->created_at->diffForHumans()}}</p>
                            <p>{{ $comment->content }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                
                <hr>
                
                <!-- <div class="comment-section">
                    <h4>Leave a Comment</h4>
                    <form class="comment-form">
                        <div class="mb-3">
                            <label for="comment" class="form-label">Your Comment</label>
                            <textarea class="form-control" id="comment" rows="4" placeholder="Write your comment here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </form>
                </div> -->
            </div>

            <!-- Sidebar -->
            
        </div>
  
</x-dashboard-layout>