@extends('layout.main')

@section('content2')
        <div class="card">
            <div class="card-header">
         Halo, Welcome.
            </div>
            <div class="card-body">
            <div class="alert alert-info bg-warning text-light text-center fw-bold">
               Selamat datang di website data Ikopin University
            </div>
            </div>
        </div>

        {{-- HEADER --}}
        <header id="header" class="w-auto carousel-slide" data-bs-ride="carousel" data-bs-interval="3000" style="padding-top: 104px;">
            <div class="container2  carousel-inner">
                <div class="text-center carousel-item active">
                    <h3 class="header-text text-capitalize text-white"> IKOPIN ACTIVITY </h3>
                    <h2 class="sub-head text-uppercase py-2 fw-bold text-white"> Mahasiswa Baru</h2>
                    <a href="https://www.ikopin.ac.id/pendaftaran-s1" class="nav-head btn mt-3 text-uppercase"> Daftar Sekarang!</a>
                </div>
                <div class="text-center carousel-item">
                    <h3 class="header-text text-capitalize text-white"> Pilih Jurusan Ikopin </h2>
                    <h2 class="sub-head text-uppercase py-2 fw-bold text-warning"> Cek Ikopin Website </h2>
                    <a href="https://www.ikopin.ac.id/" class="nav-head btn mt-3 text-uppercase"> Disini </a>
                </div>
            </div>
            <hr>
        </header>
  
        <div class="container mx-auto">
            <div class="row justify-content-center text-center">
                <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                        <label>Total Mahasiswa</label>
                        <h1>{{ $totalMahasiswa }}</h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-body bg-warning text-white mb-3">
                        <label>Total Dosen</label>
                        <h1>{{ $totalDosen }}</h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-body bg-danger text-white mb-3">
                        <label>Total Mahasiswa Baru</label>
                        <h1>349</h1>
                    </div>
                </div>
            </div>
 
            </div>
 
            </div>
        
              
        

        <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <address class="float-lg-left">
                  <p class="fw-bold">Kawasan Pendidikan Tinggi Jatinangor</p>
                  <p>Jl. Jatinangor KM. 20, 5, Cibeusi, Sumedang, Kabupaten Sumedang, Jawa Barat 45363</p>
                  <p>Hubungi Kami</p>
                  <p class="fw-bold">Telp: (022) 7794444 Email: sekrek@ikopin.ac.id</p>
                </address>
              </div>
            </div>
          </div>
          

@endsection