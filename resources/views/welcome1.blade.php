<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous" />
    <title>OKE Garden</title>
  </head>
  <body>
    <!-- Navbar -->
    <header>
      <img src="./images/logo.png" alt="OKE Garden" class="logo" />
      <nav>
        <ul>
          <li><a href="">Beranda</a></li>
          <li>
            <a href="">Layanan <i class="fas fa-caret-down"></i></a>
          </li>
          <li>
            <a href="">Blog <i class="fas fa-caret-down"></i></a>
          </li>
          <li>
            <a href="">Mitra <i class="fas fa-caret-down"></i></a>
          </li>
        </ul>
      </nav>
      <div class="wrapper-ham">
        <img
          src="https://randomuser.me/api/portraits/men/11.jpg"
          alt="person"
          class="profile" />
        <button class="hamburger"><i class="fas fa-bars"></i></button>
      </div>
    </header>

    <!-- consultation -->
    <section class="consultation">
      <div class="consul-title">
        <h1>Konsultasi Taman</h1>
        <p>
          klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk
          memanggil konsultan kami
        </p>
      </div>
      <div class="reservation">
        <div class="calendar">
          <div class="upper-cal">
            <h4>October 2022</h4>
            <div class="arrow-cal">
              <i class="fas fa-angle-left"></i
              ><i class="fas fa-angle-right"></i>
            </div>
          </div>
          <div class="month">
            <div class="days">
              <h4>Mo</h4>
              <h4>Tu</h4>
              <h4>We</h4>
              <h4>Th</h4>
              <h4>Fr</h4>
              <h4>Sa</h4>
              <h4>Su</h4>
            </div>
            <div class="dates"></div>
          </div>
        </div>
        <div class="times">
          <div class="upper-time">
            <div class="flex">
              <h4>Thursday</h4>
              <p>October <span id="target-date">8</span>, 2022</p>
            </div>
            <h4>Pilih Waktu</h4>
            <p>Durasi Konsultasi 30 Menit</p>
          </div>
          <div class="choose">
            <div class="grid">
              <div class="time">09.00</div>
              <div class="time">13.00</div>
              <div class="time">10.00</div>
              <div class="time">14.00</div>
              <div class="time">11.00</div>
              <div class="time">15.00</div>
              <div class="time">12.00</div>
              <div class="time">16.00</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Form Park -->
    <section class="form-park">
      <div class="personal-data">
        <h2 class="title-data">Informasi Data Diri</h2>
        <form>
          <div class="form-control">
            <label>Nama Lengkap</label>
            <input type="text" placeholder="Yudha Wahyu" />
          </div>
          <div class="form-control">
            <label>No HP</label>
            <input type="text" placeholder="+62 852 2324 4747" />
          </div>
        </form>
        <div class="address">
          <p>Alamat</p>
          <div class="wrapper-address">
            <p>
              Jl. Serangkai 1 Perum. Bumi jaya blok A No 12 Kelurahan samping,
              Kecamatan Baru, Kota Tanjungpinang, Kepulauan Riau 29125,
              Indonseia
            </p>
            <a href="" class="add-address">Tambahkan Alamat Baru</a>
          </div>
        </div>
      </div>
      <div class="parks">
        <h2 class="title-data">Informasi Konsultan Taman</h2>
        <div class="sum-park">
          <h3 class="sub-title">Lahan Taman</h3>
          <p class="tagline">Pilih jumlah lahan taman akan dibuat</p>
          <div class="choose-park">1 Lahan Taman</div>
          <div class="choose-park">2 Lahan Taman</div>
          <div class="choose-park">Lebih dari 2 Lahan Taman</div>
        </div>
        <div class="theme-park">
          <h3 class="sub-title">Lahan Taman</h3>
          <p class="tagline">Pilih tema taman yang akan dibuat</p>
          <p class="note">
            <b>Catatan :</b> Jika anda belum memiliki inspirasi tema taman maka
            anda bisa melewati tahapan ini, konsultan kami akan memberikan
            rekomendasi terbaik untuk taman anda
          </p>
          <div class="cards">
            <div class="card">
              <img src="./images/taman1.jpg" alt="taman minimalis" />
              <div class="card-body">
                <h3>Taman Minimalis</h3>
                <p class="desc">Taman yang indah dilahan yang sempit</p>
                <div class="wrapper-add">
                  <a href="" class="add">Pilih</a>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="./images/taman2.jpg" alt="taman kering" />
              <div class="card-body">
                <h3>Taman Kering</h3>
                <p class="desc">
                  Taman yang dirancang untuk menghasilkan suasana alam didalam
                  dan diluar rumah
                </p>
                <div class="wrapper-add">
                  <a href="" class="add">Pilih</a>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="./images/taman3.jpg" alt="taman tropis" />
              <div class="card-body">
                <h3>Taman Tropis</h3>
                <p class="desc">
                  Taman yang paling sesuai dengan iklim di indonesia
                </p>
                <div class="wrapper-add">
                  <a href="" class="add">Pilih</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="large-park">
          <h3 class="sub-title">Estimasi Ukuran Taman</h3>
          <div class="wrapper-large">
            <div class="choose-large">&lt;10m2</div>
            <div class="choose-large">11-20m2</div>
            <div class="choose-large">21-30m2</div>
            <div class="choose-large">31-40m2</div>
            <div class="choose-large">41-50m2</div>
            <div class="choose-large">51-60m2</div>
            <div class="choose-large">&gt;100m2</div>
          </div>
        </div>
        <div class="wrapper-btn">
          <button class="btn-btl">Batal</button>
          <button class="btn-oke">OKE</button>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
