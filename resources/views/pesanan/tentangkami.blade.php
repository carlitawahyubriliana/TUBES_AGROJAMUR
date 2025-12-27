@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4 text-center">Tentang Kami - Argo Jamur</h1>
            <p class="lead text-center mb-5">Kami adalah penyedia jamur segar berkualitas tinggi dengan komitmen untuk kesehatan dan keberlanjutan.</p>
        </div>
    </div>

    <!-- Company Overview -->
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title text-success">Visi Kami</h3>
                    <p class="card-text">Menjadi penyedia jamur terkemuka di Indonesia yang memberikan produk berkualitas tinggi, layanan prima, dan berkontribusi pada kesehatan masyarakat melalui nutrisi alami.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title text-primary">Misi Kami</h3>
                    <ul class="card-text">
                        <li>Menyediakan jamur segar dengan standar kualitas tertinggi</li>
                        <li>Menerapkan praktik pertanian berkelanjutan</li>
                        <li>Mendidik masyarakat tentang manfaat jamur untuk kesehatan</li>
                        <li>Membangun kemitraan dengan petani lokal</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Products -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Produk Kami</h2>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-mushroom fa-3x text-success mb-3"></i>
                    <h5 class="card-title">Tiram Putih</h5>
                    <p class="card-text">Jamur tiram putih segar dengan tekstur lembut dan rasa gurih.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-mushroom fa-3x text-brown mb-3" style="color: #8B4513;"></i>
                    <h5 class="card-title">Tiram Coklat</h5>
                    <p class="card-text">Jamur tiram coklat dengan aroma khas dan nutrisi tinggi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-mushroom fa-3x text-warning mb-3"></i>
                    <h5 class="card-title">Jamur Kuping</h5>
                    <p class="card-text">Jamur kuping hitam yang kaya serat dan mineral.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-mushroom fa-3x text-light mb-3" style="color: #F5F5DC;"></i>
                    <h5 class="card-title">Jamur Kancing</h5>
                    <p class="card-text">Jamur kancing putih klasik dengan rasa yang universal.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Mengapa Memilih Kami?</h2>
        </div>
        <div class="col-md-4">
            <div class="card text-center h-100">
                <div class="card-body">
                    <i class="fas fa-leaf fa-2x text-success mb-3"></i>
                    <h5 class="card-title">Organik & Alami</h5>
                    <p class="card-text">Semua produk kami ditanam tanpa bahan kimia berbahaya, menggunakan metode organik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center h-100">
                <div class="card-body">
                    <i class="fas fa-truck fa-2x text-primary mb-3"></i>
                    <h5 class="card-title">Pengiriman Cepat</h5>
                    <p class="card-text">Layanan pengiriman yang cepat dan aman untuk menjaga kesegaran produk.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center h-100">
                <div class="card-body">
                    <i class="fas fa-award fa-2x text-warning mb-3"></i>
                    <h5 class="card-title">Kualitas Terjamin</h5>
                    <p class="card-text">Setiap produk melalui kontrol kualitas ketat sebelum dikirim ke pelanggan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Info -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h3 class="card-title">Hubungi Kami</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-map-marker-alt fa-2x text-danger mb-2"></i>
                            <h6>Alamat</h6>
                            <p>Jl. Jamur Segar No. 123<br>Kota Malang, Jawa Timur</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-phone fa-2x text-success mb-2"></i>
                            <h6>Telepon</h6>
                            <p>(0341) 123-4567</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                            <h6>Email</h6>
                            <p>info@argojamur.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.text-brown {
    color: #8B4513 !important;
}
</style>
@endsection