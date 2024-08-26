<x-home-layout>
  
  @section('header')
    <header class="hero-section">
        <img src="{{ asset('hero.jpg') }}" alt="Hero Image">
        <div class="hero-content">
            <h1 class="display-4 text-dark poppins-semibold mt-3">Selamat Datang
            Di Website Blogkuy</h1>
        
            <a href="/posts" class="btn btn-primary my-3">Lihat Blog!</a>
        </div>
    </header>
  @endsection
  
  
  <section class="container text-center my-5">
        <div class="row">
            <div class="col-md-4 feature-box">
                <div class="feature-icon">
                    <i class="bi bi-lightning"></i>
                </div>
                <h3>Pefroma Cepat</h3>
                <p>Rasakan waktu muat secepat kilat dan kinerja mulus.</p>
            </div>
            <div class="col-md-4 feature-box">
                <div class="feature-icon">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h3>Keamanan</h3>
                <p>Lindungi data Anda dengan fitur keamanan terbaik.</p>
            </div>
            <div class="col-md-4 feature-box">
                <div class="feature-icon">
                    <i class="bi bi-cog"></i>
                </div>
                <h3>Penyesuaian</h3>
                <p>Sesuaikan platform agar sesuai dengan kebutuhan dan preferensi unik Anda.</p>
            </div>
        </div>
    </section>
</x-home-layout>