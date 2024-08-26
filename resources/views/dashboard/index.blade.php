<x-dashboard-layout>
  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <h1 class="h2">Dashboard</h1>
                <p>Halaman dashboard author dari aplilkasi blog kuy.</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Jumlah Postingan</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{ $posts->count() }}
                              Postingan</h5>
                              
                            </div>
                          </div>
                    </div>
                    
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Jumlah Komentear</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{
                              $comments->count() }} Komentar</h5>
                            </div>
                          </div>
                    </div>
                   
                </div>
                
</x-dashboard-layout>