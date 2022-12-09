@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/data-undangan.css') }}" />
@section('title', 'Template Invitation')

@section('content_user')

    <form id="form-gambar-premium" enctype="multipart/form-data" method="POST">
        @csrf
        <!-- Invitation Card -->
        <section class="isi-data-undangan">
            <div class="container">
                <h3>Dapatkan <span>Kartu Undangan</span> Kamu Sekarang Juga</h3>
                <!-- Nav Tab -->
                <!-- Kepala Undangan -->
                <div class="col-lg-12 col-md-12 mx-auto kepala">
                    <!-- Isi Undangan -->
                    <div class="col-lg-10 col-md-10 mx-auto">
                        <div class="accordion accordion-flush" id="accordionFlush">
                            <!-- Foto kedua Mempelai -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <p>
                                            <i class="bi bi-people-fill pr-2"></i>
                                            Foto Kedua Mempelai
                                        </p>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                                    <div class="accordion-body">
                                        <div class="kedua-mempelai">
                                            <div class="mb-3">
                                                <label for="fml" class="form-label">Foto Kedua
                                                    Mempelai</label>
                                                <input type="file" class="form-control" id="gambar_mempelai"
                                                    onchange="gambarMempelai()" />
                                                <div class="mt-1 mb-3">
                                                    <small class="text-muted" style="font-style: italic">Upload Gambar
                                                        Posisi
                                                        Potrait</small>
                                                </div>
                                                @if ($edit_pemesanan_gambar_premium->gambar_mempelai_pria)
                                                    <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/', $edit_pemesanan_gambar_premium->gambar_mempelai_pria) }}"
                                                        class="img-fluid mt-1" id="img_mempelai" alt="background image"
                                                        width="50%" />
                                                @else
                                                    <img src="{{ asset('user_page/template/public/img/img.png') }}"
                                                        class="img-fluid mt-1" id="img_mempelai" alt="background image" />
                                                    <div id="validationImgMempelai" class="invalid-feedback"></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Foto Mempelai Pria dan Wanita -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <p>
                                            <i class="bi bi-people-fill pr-2"></i>
                                            Foto Mempelai Pria dan Wanita
                                        </p>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="fml" class="form-label">Foto Mempelai
                                                        Pria</label>
                                                    <input type="file" id="gambar_mempelai_pria"
                                                        onchange="gambarMempelaiPria()" class="form-control" />
                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Potrait</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->gambar_mempelai_pria)
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/', $edit_pemesanan_gambar_premium->gambar_mempelai_pria) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiPria"
                                                            alt="background image" width="50%" />
                                                    @else
                                                        <img src="{{ asset('user_page/template/public/img/img.png') }}"
                                                            class="img-fluid mt-1" id="imgMempelaiPria"
                                                            alt="background image" />
                                                    @endif
                                                    <div id="validationImgMempelaiPria" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="fml" class="form-label">Foto Mempelai
                                                        Wanita</label>
                                                    <input type="file" id="gambar_mempelai_wanita"
                                                        onchange="gambarMempelaiWanita()" class="form-control" />
                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Potrait</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->gambar_mempelai_wanita)
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/', $edit_pemesanan_gambar_premium->gambar_mempelai_wanita) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @else
                                                        <img src="{{ asset('user_page/template/public/img/img.png') }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" />
                                                    @endif
                                                    <div id="validationGambarMempelaiWanita" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Gallery -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <p>
                                            <i class="bi bi-images pr-2"></i>
                                            Gallery
                                        </p>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <label for="fp" class="form-label">Foto Pernikahan (Masukkan
                                                Foto Pernikahan Maksimal
                                                10 Foto)</label>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <input type="file" id="galeri_foto1" class="form-control" />
                                                    <div id="validationgaleri_foto1" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape untuk background galeri</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto1 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto1) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">

                                                    <input type="file" id="galeri_foto2" class="form-control" />
                                                    <div id="validationgaleri_foto2" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Potrait</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto2 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto2) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                    <input type="file" id="galeri_foto3" class="form-control" />
                                                    <div id="validationgaleri_foto3" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto3 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto3) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                    <input type="file" id="galeri_foto4" class="form-control" />
                                                    <div id="validationgaleri_foto4" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto4 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto4) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                    <input type="file" id="galeri_foto5" class="form-control" />
                                                    <div id="validationgaleri_foto5" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto5 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto5) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                </div>
                                                <div class="col-lg-6 col-md-6">


                                                    <input type="file" id="galeri_foto6" class="form-control" />
                                                    <div id="validationgaleri_foto6" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto6 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto6) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                    <input type="file" id="galeri_foto7" class="form-control" />
                                                    <div id="validationgaleri_foto7" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto7 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto7) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                    <input type="file" id="galeri_foto8" class="form-control" />
                                                    <div id="validationgaleri_foto8" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto8 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto8) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif

                                                    <input type="file" id="galeri_foto9" class="form-control" />
                                                    <div id="validationgaleri_foto9" class="invalid-feedback">
                                                    </div>

                                                    <div class="mt-1 mb-3">
                                                        <small class="text-muted" style="font-style: italic">Upload Gambar
                                                            Posisi
                                                            Landscape</small>
                                                    </div>

                                                    @if ($edit_pemesanan_gambar_premium->galeri_foto9 != 'undefined')
                                                        <img src="{{ url('user_page/template/public/biodata_pelanggan/gambar_galeri/', $edit_pemesanan_gambar_premium->galeri_foto9) }}"
                                                            class="img-fluid mt-1" id="imgMempelaiWanita"
                                                            alt="background image" width="50%" />
                                                    @endif
                                                    <br>
                                                    <a class="pesan-undangan float-end mt-4 mx-2 btn btn-danger"
                                                        href="{{ route('pemesanan_saya') }}">Kembali </a>
                                                    <button onclick="insertData()" type="submit"
                                                        class="pesan-undangan btn float-end mt-4">
                                                        Pesan
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Nav Tab -->
            </div>
        </section>
        <!-- End Invitation Card -->
    </form>


    <script>
        function insertData() {
            swal({
                position: 'center',
                icon: 'success',
                title: 'Peringatan',
                text: 'tunggu yaa, Data mu sedang diproses',
            })
        }
        // menampilkan gambar mempelai
        function gambarMempelai() {
            document.getElementById("img_mempelai").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambar_mempelai").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("img_mempelai").src = oFREvent.target.result;
            };
        };

        function gambarMempelaiPria() {
            document.getElementById("imgMempelaiPria").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambar_mempelai_pria").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("imgMempelaiPria").src = oFREvent.target.result;
            };
        };

        function gambarMempelaiWanita() {
            document.getElementById("imgMempelaiWanita").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambar_mempelai_wanita").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("imgMempelaiWanita").src = oFREvent.target.result;
            };
        };
    </script>

    <script>
        let formGambarPremium = document.getElementById('form-gambar-premium');
        formGambarPremium.addEventListener('submit', function(e) {
            e.preventDefault();
            let gambar_mempelai = document.getElementById('gambar_mempelai');
            let gambar_mempelai_pria = document.getElementById('gambar_mempelai_pria');
            let gambar_mempelai_wanita = document.getElementById('gambar_mempelai_wanita');
            let galeri_foto1 = document.getElementById('galeri_foto1');
            let galeri_foto2 = document.getElementById('galeri_foto2');
            let galeri_foto3 = document.getElementById('galeri_foto3');
            let galeri_foto4 = document.getElementById('galeri_foto4');
            let galeri_foto5 = document.getElementById('galeri_foto5');
            let galeri_foto6 = document.getElementById('galeri_foto6');
            let galeri_foto7 = document.getElementById('galeri_foto7');
            let galeri_foto8 = document.getElementById('galeri_foto8');
            let galeri_foto9 = document.getElementById('galeri_foto9');

            const formData = new FormData()
            formData.append("gambar_mempelai", gambar_mempelai.files[0])
            formData.append("gambar_mempelai_pria", gambar_mempelai_pria.files[0])
            formData.append("gambar_mempelai_wanita", gambar_mempelai_wanita.files[0])
            formData.append("galeri_foto1", galeri_foto1.files[0])
            formData.append("galeri_foto2", galeri_foto2.files[0])
            formData.append("galeri_foto3", galeri_foto3.files[0])
            formData.append("galeri_foto4", galeri_foto4.files[0])
            formData.append("galeri_foto5", galeri_foto5.files[0])
            formData.append("galeri_foto6", galeri_foto6.files[0])
            formData.append("galeri_foto7", galeri_foto7.files[0])
            formData.append("galeri_foto8", galeri_foto8.files[0])
            formData.append("galeri_foto9", galeri_foto9.files[0])

            axios.post("{{ route('update_form_gambar', $idPemesanan_premium) }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            swal({
                                title: "Oops...",
                                text: "Data nya kurang nih, silahkan cek dulu yaaa",
                                icon: "warning",
                                dangerMode: true,
                            })

                            if (dataError.gambar_mempelai) {
                                let validationImgMempelai = document.getElementById(
                                    'validationImgMempelai')
                                gambar_mempelai.classList.add("is-invalid")
                                validationImgMempelai.innerText = dataError.gambar_mempelai[0]
                                validationImgMempelai.style.display = "block"
                            }

                            if (dataError.gambar_mempelai_pria) {
                                let validationImgMempelaiPria = document.getElementById(
                                    'validationImgMempelaiPria')
                                gambar_mempelai_pria.classList.add("is-invalid")
                                validationImgMempelaiPria.innerText = dataError.gambar_mempelai_pria[0]
                                validationImgMempelaiPria.style.display = "block"
                            }

                            if (dataError.gambar_mempelai_wanita) {
                                let validationGambarMempelaiWanita = document.getElementById(
                                    'validationGambarMempelaiWanita')
                                gambar_mempelai_wanita.classList.add("is-invalid")
                                validationGambarMempelaiWanita.innerText = dataError.gambar_mempelai_wanita[0]
                                validationGambarMempelaiWanita.style.display = "block"
                            }
                            if (dataError.galeri_foto1) {
                                let validationgaleri_foto1 = document.getElementById(
                                    'validationgaleri_foto1')
                                galeri_foto1.classList.add("is-invalid")
                                validationgaleri_foto1.innerText = dataError.galeri_foto1[0]
                                validationgaleri_foto1.style.display = "block"
                            }
                            if (dataError.galeri_foto2) {
                                let validationgaleri_foto2 = document.getElementById(
                                    'validationgaleri_foto2')
                                galeri_foto2.classList.add("is-invalid")
                                validationgaleri_foto2.innerText = dataError.galeri_foto2[0]
                                validationgaleri_foto2.style.display = "block"
                            }
                            if (dataError.galeri_foto3) {
                                let validationgaleri_foto3 = document.getElementById(
                                    'validationgaleri_foto3')
                                galeri_foto3.classList.add("is-invalid")
                                validationgaleri_foto3.innerText = dataError.galeri_foto3[0]
                                validationgaleri_foto3.style.display = "block"
                            }
                            if (dataError.galeri_foto4) {
                                let validationgaleri_foto4 = document.getElementById(
                                    'validationgaleri_foto4')
                                galeri_foto4.classList.add("is-invalid")
                                validationgaleri_foto4.innerText = dataError.galeri_foto4[0]
                                validationgaleri_foto4.style.display = "block"
                            }
                            if (dataError.galeri_foto5) {
                                let validationgaleri_foto5 = document.getElementById(
                                    'validationgaleri_foto5')
                                galeri_foto5.classList.add("is-invalid")
                                validationgaleri_foto5.innerText = dataError.galeri_foto5[0]
                                validationgaleri_foto5.style.display = "block"
                            }

                            if (dataError.galeri_foto6) {
                                let validationgaleri_foto6 = document.getElementById(
                                    'validationgaleri_foto6')
                                galeri_foto6.classList.add("is-invalid")
                                validationgaleri_foto6.innerText = dataError.galeri_foto6[0]
                                validationgaleri_foto6.style.display = "block"
                            }
                            if (dataError.galeri_foto7) {
                                let validationgaleri_foto7 = document.getElementById(
                                    'validationgaleri_foto7')
                                galeri_foto7.classList.add("is-invalid")
                                validationgaleri_foto7.innerText = dataError.galeri_foto7[0]
                                validationgaleri_foto7.style.display = "block"
                            }
                            if (dataError.galeri_foto8) {
                                let validationgaleri_foto8 = document.getElementById(
                                    'validationgaleri_foto8')
                                galeri_foto8.classList.add("is-invalid")
                                validationgaleri_foto8.innerText = dataError.galeri_foto8[0]
                                validationgaleri_foto8.style.display = "block"
                            }

                            if (dataError.galeri_foto9) {
                                let validationgaleri_foto9 = document.getElementById(
                                    'validationgaleri_foto9')
                                galeri_foto9.classList.add("is-invalid")
                                validationgaleri_foto9.innerText = dataError.galeri_foto9[0]
                                validationgaleri_foto9.style.display = "block"
                            }

                        } else {
                            swal({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href =
                                    "{{ route('pemesanan_saya') }}"
                            })
                        }
                    }
                })
                .catch(function(error) {
                    swal({
                        title: "Oops...",
                        text: "Data mu ada yang error, silahkan cek kembali yaaa",
                        icon: "warning",
                        dangerMode: true,
                    })
                });
        })
    </script>

@endsection
