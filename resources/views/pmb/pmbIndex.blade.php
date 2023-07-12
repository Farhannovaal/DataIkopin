@extends('layout.main')
@section('content2')
<link href="{{ asset('assets/CSS/pmb.css') }}" rel="stylesheet">


        {{-- HEADER --}}
        <header id="header" class="w-auto carousel-slide" data-bs-ride="carousel" data-bs-interval="3000" style="padding-top: 104px;">
            <div class="container2  carousel-inner">
                <div class="text-center carousel-item active">
                    <h3 class="header-text text-capitalize text-white"> IKOPIN ACTIVITY </h3>
                    <h2 class="sub-head text-uppercase py-2 fw-bold text-white"> Mahasiswa Baru</h2>
                    <a href="https://docs.google.com/forms/u/0/d/e/1FAIpQLSf6nwvE--_Pk5FndHugpGkduXmAtsTqErrr0hKYrcJR-C7dsw/viewform?usp=send_form&pli=1" class="nav-head btn mt-3 text-uppercase"> Daftar Sekarang!</a>
                </div>
                <div class="text-center carousel-item">
                    <h3 class="header-text text-capitalize text-white"> Pilih Jurusan Ikopin </h2>
                    <h2 class="sub-head text-uppercase py-2 fw-bold text-warning"> Cek Ikopin Website </h2>
                    <a href="https://www.ikopin.ac.id/" class="nav-head btn mt-3 text-uppercase"> Disini </a>
                </div>
            </div>
            <hr>
        </header>


    <div class="content">

                <h2 class="head-text text-center"> Pendaftaran Mahasiswa Baru 2023/2024 </h2>
            <div class="maba-content">
                <div class="content1">
                    <h3> Cek Pendaftaran Mahasiswa Baru 2023/2024</h3>
                    <div class="link"><a href="https://docs.google.com/forms/u/0/d/e/1FAIpQLSf6nwvE--_Pk5FndHugpGkduXmAtsTqErrr0hKYrcJR-C7dsw/viewform?usp=send_form&pli=1"> Disini </a></div>
                    
                <div class="pop-up-container">

                    <div class="p-up pop-up1">
                        <a href="#"> Pendaftaran Mahasiswa baru Jalur Rapot/PMDK </a>
                    </div>
                    <div class="p-up pop-up2">
                        <a href="#"> Pendaftaran Mahasiswa baru Jalur Test Tertulis </a>
                    </div>
                    <div class="p-up pop-up3">
                        <a href="#"> Pendaftaran Mahasiswa Qbaru Jalur KIP </a>
                    </div>
                    <div class="p-up pop-up4">
                        <a href="#"> Pendaftaran Mahasiswa Qbaru Jalur Motivation Letter</a>
                    </div>
                </div>
                </div>
                <div class="content2">
                    <img src="{{ asset('assets/bahanikopin/image5.png') }}" alt="">
                </div>
            </div>

    </div>





    <div class="content">
        <h2 class="head-text text-center"> Persyaratan dan Biaya Kuliah </h2>

        <div class="navbar-2-content">
                <ul>
                    <li><a href="#?id=2" onclick="showCard(2)">Persyaratan Pendaftaran</a></li>
                    <li><a href="#?id=3" onclick="showCard(3)">Biaya Kuliah</a></li>
                    <li><a href="#?id=4" onclick="showCard(4)">Jurusan</a></li>
                    <li><a href="#?id=5" onclick="showCard(5)">FAQ</a></li>
                </ul>
       
        </div>
    </div>

    <div id="card-container">
        <div id="card-2" class="card">
            <h3> Program Sarjana (S1) & Diploma Tiga (D3)</h3>
            Persyaratan Pendaftaran
            <ul>
                <li>Pendidikan SMU/SMK/MA atau sederajat</li>
                <li>Lampirkan Fotocopy Ijasah SMU/SMK/MA/sederajat dan dapat dilengkapi dengan foto copy raport (untuk proses seleksi tanpa tes jika nilai raport memenuhi syarat tanpa tes)</li>
                <li>Bagi siswa kelas 3 (kelas XII) SMU/SMK/MA, dapat menggunakan foto copy raport</li>
                <li>Mengisi formulir pendaftaran secara langsung maupun online</li>
                <li>Membayar biaya pendaftaran sebesar Rp. 250.000,-</li>
            </ul>
            <br>
            <h3> Program PascaSarjana(S2)</h3>
            <ul>
                <li>Berijasah Sarjana (S1) semua Jurusan (Ijasah dilegalisir)</li>
                <li>Mengikuti tes potensi akademik.</li>
                <li>Mengisi formulir pendaftaran.</li>
                <li>Foto copy Ijasah 3 lembar</li>
                <li>Membayar Biaya Pendaftaran sebesar Rp. 500.000</li>
            </ul>
        </div>


        <div id="card-3" class="card">Biaya Kuliah
            <div class="slideshow-container">
                <div class="slide" id="slide-1">
                    <h2> Biaya Reguler D3</h2>
                    <div class="content-slide">
                       <img src="{{ asset('assets/bahanikopin/biaya2.png') }}" alt="">
                    </div>
                </div>
                <div class="slide" id="slide-2">
                    <h2> Biaya Reguler S1</h2>
                    <div class="content-slide">
                        <img src="{{ asset('assets/bahanikopin/biaya1.png') }}" alt="">
                    </div>
                </div>
                <div class="slide" id="slide-3">
                    <h2> Biaya Reguler S1 - Ekstensi </h2>
                    <div class="content-slide">
                        <img src="{{ asset('assets/bahanikopin/biaya3.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
            
        </div>
        <div id="card-4" class="card">Jurusan</div>
        <div id="card-5" class="card">FAQ</div>
    </div>


        <script>
                    $(document).ready(function() {

                $('.pop-up-container').show(1000, function() {
                    $('.pop-up-container > div').each(function(index) {
                    $(this).delay(1000 * index).slideDown(1000);
                    });
                });
                });

                var currentCardId = null;

                function showCard(cardId) {
                    event.preventDefault();

                    // Mengambil elemen card berdasarkan ID
                    var card = document.getElementById('card-' + cardId);

                    // Menyembunyikan card sebelumnya jika ada
                    if (currentCardId !== null) {
                        var currentCard = document.getElementById('card-' + currentCardId);

                        // Jika pengguna mengklik link yang sama, tambahkan display none pada card yang sedang ditampilkan
                        if (cardId === currentCardId) {
                            currentCard.style.display = 'none';
                            currentCardId = null; // Menghapus ID card yang sedang ditampilkan
                            return;
                        }

                        currentCard.style.display = 'none';
                    }

                    // Menampilkan card yang baru
                    card.style.display = 'block';

                    // Menyimpan ID card yang sedang ditampilkan
                    currentCardId = cardId;
                }
                var slides = document.querySelectorAll('.slide');

                function showSlideContent(slideId) {
                    // Menghapus kelas active dari semua konten slide
                    var contentSlides = document.querySelectorAll('.content-slide');
                    contentSlides.forEach(function(contentSlide) {
                        contentSlide.classList.remove('active');
                    });

                    // Menambahkan kelas active ke konten slide yang sesuai
                    var slideContent = document.querySelector('#' + slideId + ' .content-slide');
                
                    // Memeriksa apakah konten slide yang diklik sudah memiliki kelas active
                    var isActive = slideContent.classList.contains('active');
                
                    // Hapus kelas active jika konten slide yang diklik sudah aktif
                    if (isActive) {
                        slideContent.classList.remove('active');
                    } else {
                        slideContent.classList.add('active');
                    }
                }

                // Menambahkan event listener untuk setiap slide
                slides.forEach(function(slide) {
                    slide.addEventListener('click', function() {
                        showSlideContent(this.id);
                    });
                });

     
        </script>

@endsection