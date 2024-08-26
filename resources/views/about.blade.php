<x-home-layout>
   <style>
        .about-section {
            padding: 60px 0;
            min-height: ;: 100vh;
        }

        .about-section h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .about-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

    </style>
  <section class="about-section text-center">
        <div class="container">
            <img src="{{ asset('ananda.jpg') }}" width="150" alt="Foto Saya" class="about-img">
            <h2>Halo, Saya Ananda Febiansyah</h2>
            <p>Selamat datang di blog yang saya kembangkan dengan menggunakan Laravel dan Bootstrap. Blog ini adalah hasil kerja keras dan dedikasi saya dalam dunia pengembangan web.</p>
            <p>Mengerjakan proyek ini sendiri adalah tantangan yang menarik dan memuaskan. Setiap baris kode yang saya tulis dan setiap fitur yang saya tambahkan di blog ini adalah wujud dari semangat dan komitmen saya untuk terus belajar dan berbagi pengetahuan dengan orang lain.</p>
            <p>Saya berharap blog ini bisa menjadi tempat yang bermanfaat bagi Anda yang ingin mendalami dunia pengembangan web, atau sekadar mencari inspirasi. Terima kasih telah berkunjung!</p>
        </div>
    </section>
</x-home-layout>