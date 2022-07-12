<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{asset('user_page/template/public/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('user_page/template/public/css/news.css')}}" />
    <link rel="stylesheet" href="{{asset('user_page/template/public/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user_page/template/public/css/own-carousel.min.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
    <script src="{{asset('user_page/template/public/css/js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('user_page/template/public/css/js/popper.min.js')}}" defer></script>
    <script src="{{asset('user_page/template/public/css/js/script.js')}}" defer></script>
    <script src="{{asset('user_page/template/public/css/js/own-carousel.min.js')}}" defer></script>
    <title>Preview Blog</title>
  </head>
  <body>

    <!-- Up button -->
    <a href="#" onclick="topFunction()" id="upButton" title="Go to the top">
      <i class="bi bi-arrow-up-circle-fill"></i>
    </a>
    <!-- End up button -->

    
    <br>
    <!-- Search News -->
    <section class="pencarian-news">
      <div class="container h-25 mb-4">
        <h3 class="text-center mb-4">Preview Blog</h3>
      </div>
    </section>
    <!-- End Search News -->

    <section class="blog">
      <div class="container">
        <!-- Blog -->
        <div class="col-lg-12">
          <div class="row mb-2">
            <div class="col-md-1"></div>
            <!-- Card Utama -->
            <div class="card-utama col-md-10">
              <div class="card">
                <img
                  src="{{asset('gambar/gambar_blog/thumbnail')}}/{{$blog->thumbnail}}"
                  class="card-img-top"
                  alt="card utama"
                />
                <div class="card-body">
                  <div class="kdw">
                    <h6>{{$blog->judul}}</h6>
                    <p class="card-waktu">
                      {{$blog->tanggal}} oleh Risedev
                    </p>
                  </div>
                  <div class="card-title">
                    <h5>
                      {{$blog->judul}}
                    </h5>
                    <div class="card-text">
                      {!! $blog->isi_blog !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Utama -->
          </div>
        </div>
        <!-- End Blog -->
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 icon">
            <span class="sign-up pb-2">SIGN UP & GET 10% OFF</span>
            <form class="col-md-11 mx-2">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control rounded-1"
                  placeholder="Email"
                />
                <button class="btn" type="button">Sign</button>
              </div>
            </form>
            <small class="text-muted mx-2">
              *New Customer only. Offer last 30 days. <a href="#">See terms.</a>
            </small>

            <ul class="list-style-none">
              <li>
                <span class="follow">FOLLOW US ON</span>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-youtube"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-tiktok"></i>
                </a>
              </li>
            </ul>

            <div class="powered">
              <span>
                POWERED BY
                <img src="{{asset('user_page/template/public')}}/img/logo.png" />
              </span>
            </div>
          </div>

          <div class="col-lg-4 explore">
            <ul class="list-style-none">
              <li class="pb-4">
                <span>EXPLORE</span>
              </li>
              <li><p>Tentang Kami</p></li>
              <li><p>Cara Bayar</p></li>
              <li><p>Pricelist</p></li>
              <li><p>Custom Template</p></li>
            </ul>
          </div>

          <div class="col-lg-4 contact">
            <ul class="list-style-none">
              <li class="pb-4">
                <span>CONTACT US</span>
              </li>
              <li>
                <i class="bi bi-whatsapp"></i>
                <p>
                  08100200300
                </p>
              </li>
              <li>
                <i class="bi bi-envelope"></i>
                <p>
                  risedev@gmail.com
                </p>
              </li>
              <li>
                <i class="bi bi-geo-alt"></i>
                <p>
                  Jl. Belanti 1, Khatib Sulaiman, Padang, Sumatera Barat.
                </p>
              </li>
            </ul>
          </div>

          <span class="text-center text-white">Pilih Pembayaran</span>
          <div class="pembayaran w-50 mx-auto">
            <ul
              class="list-style-none d-flex justify-content-evenly align-items-center mb-0"
            >
              <li>
                <img src="{{asset('user_page/template/public')}}/img/ic-bank1.png" />
              </li>
              <li>
                <img src="{{asset('user_page/template/public')}}/img/ic-bank2.png" />
              </li>
              <li>
                <img src="{{asset('user_page/template/public')}}/img/ic-bank3.png" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright container-fluid text-center p-2">
      <span>
        &copy; Copyright by <b>RiseDev</b>
        <script type="text/javascript">
          document.write(new Date().getFullYear());
        </script>
        . All Right Reserved.
      </span>
    </div>
    <!-- End Footer -->
  </body>
</html>
