<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agro Jamur Pabuwaran</title>
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" />
</head>

<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="nav-left">
      <img src="{{ asset('image/logo agro.png') }}" alt="Logo Agro Jamur" class="nav-logo" />
    </div>
    <nav class="nav-menu">
      <a href="#">Beranda</a>
      <a href="#">Produk</a>
      <a href="#">Tentang Kami</a>
      <a href="#">Kontak</a>
    </nav>
    <div class="nav-right">
      <a href="#" class="nav-btn">🛒</a>
      <button class="nav-btn login-btn">Masuk</button>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero" style="background-image: url('{{ asset('image/background fix.png') }}')">
    <div class="hero-content">
      <h1>AGRO JAMUR PABUWARAN</h1>
      <p>Argo Jamur adalah penyedia jamur segar berkualitas tinggi yang dipanen langsung dari budidaya modern dan
        higienis. Kami menghadirkan berbagai jenis jamur—mulai dari jamur tiram, jamur kancing, hingga kuping.
        dengan standar kesegaran terbaik untuk kebutuhan rumah tangga, kuliner, hingga bisnis F&B. Dengan proses
        budidaya terkontrol dan pengiriman cepat, Argo Jamur memastikan setiap produk tetap segar, sehat, dan siap
        diolah menjadi hidangan lezat.</p>
      <a href="#" class="btn">Lihat Jamur</a>
    </div>
  </section>

  <!-- WHY -->
  <section class="why">
    <h2>Mengapa Memilih Agro Jamur Pabuwaran?</h2>
    <p class="subtitle">Jamur kami dibudidayakan dengan teknologi modern dan standar kebersihan tinggi.
      Setiap jamur dipanen pada waktu yang tepat untuk kualitas dan kesegaran maksimal.</p>

    <div class="why-grid">
      <div class="why-col left">
        <div class="why-item">
          <h4>100% Organik & Alami</h4>
          <p>Dibudidayakan tanpa pestisida dan bahan kimia berbahaya. Kami menggunakan media tanam organik berkualitas
            tinggi dan air bersih untuk memastikan jamur yang sehat dan aman dikonsumsi.</p>
        </div>

        <div class="why-item">
          <h4>Segar Langsung dari Kebun</h4>
          <p>Dipanen setiap hari dan langsung dikemas untuk pengiriman. Sistem cold chain kami memastikan jamur tetap
            segar sampai ke tangan Anda dengan kualitas nutrisi yang terjaga sempurna.</p>
        </div>
      </div>

      <div class="circle">
        <img src="{{ asset('image/jamur homepg.png') }}" alt="Jamur" />
      </div>

      <div class="why-col right">
        <div class="why-item">
          <h4>Kualitas Terjamin & Bersertifikat</h4>
          <p>Memiliki sertifikat BPOM dan Halal MUI. Setiap batch produksi melalui quality control ketat untuk memastikan
            standar kualitas, kebersihan, dan rasa yang konsisten.</p>
        </div>

        <div class="why-item">
          <h4>Tinggi Protein & Nutrisi</h4>
          <p>Kaya akan protein nabati, serat, vitamin B kompleks, dan mineral penting. Rendah kalori dan lemak, cocok
            untuk diet sehat, vegetarian, hingga program penurunan berat badan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="products">
    <h2>4 Jamur Pilihan Terbaik </h2>
    <br>
    <h2>Langsung dari Kebun Pabuwaran</h2>
    <p>Dipanen segar setiap hari, dikemas higienis, dan siap diantar ke rumah Anda. Kualitas premium dengan harga
      terjangkau!</p>

    <div class="product-grid">
      <div class="card">
        <img src="{{ asset('image/tiram putih.png') }}" alt="Jamur Tiram Putih" class="product-img" />
        <h4>Jamur Tiram Putih</h4>
        <p>menawarkan rasa ringan, manis, dengan tekstur kenyal dan lembut, sangat ideal untuk tumisan cepat atau jamur
          crispy</p>
        <a href="#" class="buy">BUY NOW</a>
      </div>

      <div class="card">
        <img src="{{ asset('image/tiram coklat.png') }}" alt="Jamur Tiram Coklat" class="product-img" />
        <h4>Jamur Tiram Coklat</h4>
        <p>memberikan profil rasa yang lebih "berdaging," menjadikannya pengganti daging yang populer dan sempurna untuk
          semur.</p>
        <a href="#" class="buy">BUY NOW</a>
      </div>

      <div class="card">
        <img src="{{ asset('image/jamur kuping.png') }}" alt="Jamur Kuping" class="product-img" />
        <h4>Jamur Kuping</h4>
        <p>hadir dengan tekstur jeli yang sangat kenyal dan renyah, cocok untuk sup dan capcay karena rasanya yang
          netral.</p>
        <a href="#" class="buy">BUY NOW</a>
      </div>

      <div class="card">
        <img src="{{ asset('image/jamur kancing.png') }}" alt="Jamur Kancing" class="product-img" />
        <h4>Jamur Kancing</h4>
        <p> Dengan rasa earthy dan gurih yang alami, jamur ini adalah primadona untuk topping pizza, pasta, atau steak.
        </p>
        <a href="#" class="buy">BUY NOW</a>
      </div>
    </div>
  </section>

  <!-- TESTIMONI -->
  <section class="testi">
    <h2>Hasil Nyata, Orang Nyata.</h2>
    <h4>Jangan hanya percaya pada kata-kata kami. Lihat bagaimana ribuan pelanggan telah meningkatkan kualitas masakan,
      kesehatan, dan pola makan mereka dengan manfaat dari Produk Jamur Premium kami.</h4>

    <div class="testi-grid">
      <div class="testi-card">
        <h4>Jamur Tiram Putih</h4>
        <p>“Aku awalnya ragu, tapi jamur kancing ini benar-benar beda. Setelah rutin kupakai memasak selama beberapa
          minggu, rasa masakanku jadi jauh lebih gurih, teksturnya lebih mantap, dan aromanya segar. Bahkan anakku yang
          biasanya susah makan sayur sekarang jadi suka. Benar-benar layak dibeli”</p>
        <div class="user">@pelanggan01</div>
      </div>
      <div class="testi-card">
        <h4>Jamur Kuping</h4>
        <p>“Perubahannya terasa banget setiap kali aku masak! Biasanya aku gampang capek di sore hari, tapi sejak sering
          pakai kuping ini di sup dan tumisan, energiku lebih stabil. Aromanya kuat, teksturnya tebal, dan rasanya
          selalu enak. Sangat aku rekomendasikan buat yang suka masak sehat!”</p>
        <div class="user">@pelanggan02</div>
      </div>
      <div class="testi-card">
        <h4>Jamur Tiram Coklat</h4>
        <p>“Aku suka banget karena jamur ini gampang banget diolah. Mau ditumis, digoreng crispy, atau dijadikan topping
          mie—hasilnya selalu enak! Tidak bau tanah, tidak mudah lembek, dan kualitasnya benar-benar fresh. Ini jamur
          tiram terbaik yang pernah aku beli. Langsung jadi langganan!”</p>
        <div class="user">@pelanggan03</div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="{{ asset('image/logo agro.png') }}" alt="Logo" class="footer-logo" />
        <br>
        <p><strong>Agro Jamur Pabuwaran</strong></p>
        <br>
        <p>Marketing : Jl. Gn. Merapi No.RT. 02/ 02, Pabuwaran, Pabuaran,
          Kec. Purwokerto Utara, Kabupaten Banyumas,
          Jawa Tengah, Indonesia</p>
        <br>
        <p>Operasional : Belakang UIN, Karanganjing, Purwanegara,
          Purwokerto Timur, Kabupaten Banyumas,
          Jawa Tengah, Indonesia</p>
      </div>

      <div class="footer-contact">
        <p><strong>Kontak Kami</strong></p>
        <br>
        <p>Telpon       : 0821-3848-7484</p>
        <br>
        <p>Instagram    : @agrojamurpabuaran</p>
        <br>
        <p>Facebook     : @agrojamur </p>
      </div>
    </div>

    <div class="copyright">
      © 2025 Agro Jamur Pabuwaran. Hak Cipta Dilindungi.
    </div>
  </footer>

</body>

</html>