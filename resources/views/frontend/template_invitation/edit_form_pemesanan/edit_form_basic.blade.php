@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/data-undangan.css') }}" />
@section('title', 'Template Invitation')

@section('content_user')

    <form method="POST" id="form-biodata-pelanggan" enctype="multipart/form-data">
        @csrf
        <!-- Invitation Card -->
        <section class="isi-data-undangan">
            <div class="container">
                <h3>Edit <span>Kartu Undangan</span> Kamu Sekarang Juga</h3>
                <!-- Nav Tab -->
                <!-- Kepala Undangan -->
                <div class="col-lg-12 col-md-12 mx-auto kepala">
                    <!-- Isi Undangan -->
                    <div class="tab-content isi" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-du" role="tabpanel"
                            aria-labelledby="pills-data-undangan" tabindex="0">
                            <div class="row">
                                <!-- Kiri -->
                                <div class="col-lg-7 col-md-7 kiri">
                                    <div class="accordion accordion-flush" id="accordionFlush">
                                        <!-- Homepage -->
                                        <div class="accordion-item profil-mempelai">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="true" aria-controls="flush-collapseOne">
                                                    <p>
                                                        <i class="bi bi-person-badge pr-2"></i>
                                                        Homepage
                                                    </p>
                                                </button>
                                            </h2>

                                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                                                <div class="accordion-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="ju" class="form-label">Judul
                                                                        Undangan</label>
                                                                    <input type="text" id="title"
                                                                        class="form-control"
                                                                        placeholder="ex: Undangan Pernikahan"
                                                                        value="{{ $edit_form_pemesanan->title }}" />
                                                                    <div id="validationTitle" class="invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="wa" class="form-label">Nomor What's
                                                                        App</label>
                                                                    <input type="number" id="nomor_telepon"
                                                                        value="{{ $edit_form_pemesanan->nomor_telepon }}"
                                                                        class="form-control"
                                                                        placeholder="Nomor What's App" />
                                                                    <div id="validationNomorTelepon"
                                                                        class="invalid-feedback"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="npp" class="form-label">Nama Panggilan
                                                                        Pria</label>
                                                                    <input type="text" id="nama_panggilan_pria"
                                                                        class="form-control"
                                                                        placeholder="Nama Panggilan Pria"
                                                                        value="{{ $edit_form_pemesanan->nama_panggilan_pria }}" />
                                                                    <div id="validationPanggilanPria"
                                                                        class="invalid-feedback"></div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="npw" class="form-label">Nama Panggilan
                                                                        Wanita</label>
                                                                    <input type="text" id="nama_panggilan_wanita"
                                                                        class="form-control"
                                                                        placeholder="Nama Panggilan Wanita"
                                                                        value="{{ $edit_form_pemesanan->nama_panggilan_wanita }}"
                                                                        autofocus />
                                                                    <div id="validationPanggilanWanita"
                                                                        class="invalid-feedback"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="kp" class="form-label">Kata
                                                                    Pembuka</label>
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" id="kata_pembuka" style="height: 200px; width: 100%"> 
                                                                        {{ $edit_form_pemesanan->kata_pembuka }} 
                                                                    </textarea>
                                                                    <div id="validationKataPembuka"
                                                                        class="invalid-feedback"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Kutipan Ayat -->
                                        <div class="accordion-item galeri">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    <p>
                                                        <i class="bi bi-book pr-2"></i>
                                                        Kutipan Ayat
                                                    </p>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
                                                <div class="accordion-body">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="fm" class="form-label">Kutipan Ayat</label>
                                                            <div class="form-floating">
                                                                <textarea class="form-control" placeholder="Kutipan Ayat" id="kutipan_ayat" style="height: 200px; width: 100%">
                                                                    {{ $edit_form_pemesanan->kutipan_ayat }}
                                                                </textarea>
                                                                <div id="validationKutipanAyat" class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Profil Mempelai -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    <p>
                                                        <i class="bi bi-people-fill pr-2"></i>
                                                        Profil Mempelai
                                                    </p>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-6 mempelai-pria">
                                                            <div class="mb-3">
                                                                <label for="nl" class="form-label">Nama Lengkap
                                                                    Pria</label>
                                                                <input type="text" id="nama_lengkap_pria"
                                                                    class="form-control" placeholder="Nama Lengkap Pria"
                                                                    value="{{ $edit_form_pemesanan->nama_lengkap_pria }}" />
                                                                <div id="validationNamaLengkapPria"
                                                                    class="invalid-feedback"></div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nl" class="form-label">Keterangan
                                                                    Pasangan Pria</label>
                                                                <input type="text" id="putra_dari"
                                                                    class="form-control"
                                                                    placeholder="ex : Putra Pertama Dari"
                                                                    value="{{ $edit_form_pemesanan->putra_dari }}" />
                                                                <div id="validationKeteranganPasanganPria"
                                                                    class="invalid-feedback"></div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="na" class="form-label">Nama Ayah
                                                                    (Mempelai Pria)</label>
                                                                <input type="text" id="nama_bapak_pria"
                                                                    class="form-control" placeholder="Nama Ayah"
                                                                    value="{{ $edit_form_pemesanan->nama_bapak_pria }}" />
                                                                <div id="validationNamaAyahPria" class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="ni" class="form-label">Nama Ibu
                                                                    (Mempelai Pria)</label>
                                                                <input type="text" id="nama_ibu_pria"
                                                                    class="form-control" placeholder="Nama Ibu"
                                                                    value="{{ $edit_form_pemesanan->nama_ibu_pria }}" />
                                                                <div id="validationNamaIbuPria" class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mempelai-wanita">
                                                            <div class="mb-3">
                                                                <label for="nl" class="form-label">Nama Lengkap
                                                                    Wanita</label>
                                                                <input type="text" id="nama_lengkap_wanita"
                                                                    class="form-control" placeholder="Nama Lengkap Wanita"
                                                                    value="{{ $edit_form_pemesanan->nama_lengkap_wanita }}" />
                                                                <div id="validationNamaLengkapWanita"
                                                                    class="invalid-feedback"></div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nl" class="form-label">Keterangan
                                                                    Pasangan
                                                                    Wanita</label>
                                                                <input type="text" id="putri_dari"
                                                                    class="form-control"
                                                                    placeholder="ex : Putri Pertama Dari"
                                                                    value="{{ $edit_form_pemesanan->putri_dari }}" />
                                                                <div id="validationKeteranganPasanganWanita"
                                                                    class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="na" class="form-label">Nama Ayah
                                                                    (Mempelai Wanita)</label>
                                                                <input type="text" id="nama_bapak_wanita"
                                                                    class="form-control" placeholder="Nama Ayah"
                                                                    value="{{ $edit_form_pemesanan->nama_bapak_wanita }}" />
                                                                <div id="validationNamaAyahWanita"
                                                                    class="invalid-feedback"></div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="ni" class="form-label">Nama Ibu
                                                                    (Mempelai Wanita)</label>
                                                                <input type="text" id="nama_ibu_wanita"
                                                                    class="form-control" placeholder="Nama Ibu"
                                                                    value="{{ $edit_form_pemesanan->nama_ibu_wanita }}" />
                                                                <div id="validationNamaIbuWanita"
                                                                    class="invalid-feedback"></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Jadwal Akad Nikah -->
                                        @if (in_array('akad', $previewTemplate))
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                        aria-expanded="false" aria-controls="flush-collapseFive">
                                                        <p>
                                                            <i class="bi bi-calendar-heart pr-2"></i>
                                                            Jadwal Akad Nikah
                                                        </p>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlush">
                                                    <div class="accordion-body">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="tanggal" class="form-label">Tanggal</label>
                                                                <input type="date" id="tanggal_akad"
                                                                    class="form-control"
                                                                    value="{{ $edit_form_pemesanan->tanggal_akad }}" />
                                                                <div id="validationTanggalAkad" class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-end">
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="jm" class="form-label">Jam
                                                                        Mulai</label>
                                                                    <input type="time" id="jam_mulai_akad"
                                                                        class="form-control"
                                                                        value="{{ $edit_form_pemesanan->jam_mulai_akad }}" />
                                                                    <div id="validationJamMulaiAkad"
                                                                        class="invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="js"
                                                                        class="form-label">Selesai</label>
                                                                    <input type="checkbox" value="Selesai" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="tanggal" class="form-label">Waktu
                                                                    Wilayah</label>
                                                                <select class="form-control" id="waktu_wilayah_akad"
                                                                    aria-label="Default select example">
                                                                    <option
                                                                        value="{{ $edit_form_pemesanan->waktu_wilayah_akad }}">
                                                                        {{ $edit_form_pemesanan->waktu_wilayah_akad }}
                                                                    </option>
                                                                    <option value="WIB">WIB</option>
                                                                    <option value="WIT">WIT</option>
                                                                    <option value="WITA">WITA</option>
                                                                </select>
                                                                <div id="validationWaktuWilayahAkad"
                                                                    class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="alamat" class="form-label">Alamat Lengkap
                                                                    (Untuk
                                                                    Ditampilkan di
                                                                    Undangan
                                                                    Online)</label>
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" id="lokasi_akad">{{ $edit_form_pemesanan->lokasi_akad }}</textarea>
                                                                    <label for="floatingTextarea">ex : Jl. Khatib Sulaiman
                                                                        Kel
                                                                        No.1,Lolong
                                                                        Belanti,
                                                                        Kec. Padang Utara, Kota Padang</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br />
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- Jadwal Resepsi 1 -->
                                        @if (in_array('resepsi1', $previewTemplate))
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                                        aria-expanded="false" aria-controls="flush-collapseSix">
                                                        <p>
                                                            <i class="bi bi-calendar-heart pr-2"></i>
                                                            Jadwal Resepsi 1 (Optional)
                                                        </p>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlush">
                                                    <div class="accordion-body">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="tanggal" class="form-label">Tanggal</label>
                                                                <input type="date" id="tanggal_resepsi"
                                                                    class="form-control"
                                                                    value="{{ $edit_form_pemesanan->tanggal_resepsi }}" />
                                                                <div id="validationTanggalResepsi"
                                                                    class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-end">
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="jm" class="form-label">Jam
                                                                        Mulai</label>
                                                                    <input type="time" id="jam_mulai_resepsi"
                                                                        class="form-control"
                                                                        value="{{ $edit_form_pemesanan->jam_mulai_resepsi }}" />
                                                                    <div id="validationJamMulaiResepsi"
                                                                        class="invalid-feedback"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="js" class="form-label">
                                                                        Selesai</label>
                                                                    <input type="checkbox" value="Selesai" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="tanggal" class="form-label">Waktu
                                                                    Wilayah</label>
                                                                <select class="form-control" id="waktu_wilayah_resepsi"
                                                                    aria-label="Default select example">
                                                                    <option
                                                                        value="{{ $edit_form_pemesanan->waktu_wilayah_resepsi }}">
                                                                        {{ $edit_form_pemesanan->waktu_wilayah_resepsi }}
                                                                    </option>
                                                                    <option value="WIB">WIB</option>
                                                                    <option value="WIT">WIT</option>
                                                                    <option value="WITA">WITA</option>
                                                                </select>
                                                                <div id="validationWaktuWilayahResepsi"
                                                                    class="invalid-feedback"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <label for="pldp" class="form-label"> Alamat Lengkap
                                                                (Untuk
                                                                Ditampilkan di
                                                                Undangan
                                                                Online)</label>
                                                            <div class="form-floating">
                                                                <textarea class="form-control" id="lokasi_resepsi" id="floatingTextarea" style="height: 80px; width: 100%">
                                                                    {{ $edit_form_pemesanan->lokasi_resepsi }}
                                                                </textarea>
                                                                <label for="floatingTextarea">ex : Jl. Khatib Sulaiman Kel
                                                                    No.1,Lolong
                                                                    Belanti,
                                                                    Kec. Padang Utara, Kota Padang</label>
                                                            </div>
                                                            <div id="validationLokasiResepsi" class="invalid-feedback">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Jadwal Resepsi 2 -->
                                        @if (in_array('resepsi2', $previewTemplate))
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                                        aria-expanded="false" aria-controls="flush-collapseSeven">
                                                        <p>
                                                            <i class="bi bi-calendar-heart pr-2"></i>
                                                            Jadwal Resepsi 2 (Optional)
                                                        </p>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlush">
                                                    <div class="accordion-body">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="tanggal" class="form-label">Tanggal</label>
                                                                <input type="date" id="tanggal_resepsi_2"
                                                                    class="form-control"
                                                                    value="{{ $edit_form_pemesanan->tanggal_resepsi_2 }}" />
                                                                <div id="validationTanggalResepsi2"
                                                                    class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-end">
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="jm" class="form-label">Jam
                                                                        Mulai</label>
                                                                    <input type="time" id="jam_mulai_resepsi_2"
                                                                        class="form-control"
                                                                        value="{{ $edit_form_pemesanan->jam_mulai_resepsi_2 }}" />
                                                                    <div id="validationJamMulaiResepsi2"
                                                                        class="invalid-feedback"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="js"
                                                                        class="form-label">Selesai</label>
                                                                    <input type="checkbox" value="Selesai" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="tanggal" class="form-label">Waktu
                                                                    Wilayah</label>
                                                                <select class="form-control" id="waktu_wilayah_resepsi_2"
                                                                    aria-label="Default select example">
                                                                    <option
                                                                        value="{{ $edit_form_pemesanan->waktu_wilayah_resepsi2 }}">
                                                                        {{ $edit_form_pemesanan->waktu_wilayah_resepsi2 }}
                                                                    </option>
                                                                    <option value="WIB">WIB</option>
                                                                    <option value="WIT">WIT</option>
                                                                    <option value="WITA">WITA</option>
                                                                </select>
                                                                <div id="validationWaktuWilayahResepsi2"
                                                                    class="invalid-feedback"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <label for="pldp" class="form-label"> Alamat Lengkap
                                                                (Untuk
                                                                Ditampilkan di
                                                                Undangan
                                                                Online)</label>
                                                            <div class="form-floating">
                                                                <textarea class="form-control" id="lokasi_resepsi_2" id="floatingTextarea" style="height: 80px; width: 100%">
                                                                    {{ $edit_form_pemesanan->lokasi_resepsi_2 }}
                                                                </textarea>
                                                                <label for="floatingTextarea">ex : Jl. Khatib Sulaiman Kel
                                                                    No.1,Lolong
                                                                    Belanti,
                                                                    Kec. Padang Utara, Kota Padang</label>
                                                            </div>
                                                            <div id="validationLokasiResepsi2" class="invalid-feedback">
                                                            </div>
                                                        </div>
                                                        <br />
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- Masukkan Lagu Pernikahan -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTen"
                                                    aria-expanded="false" aria-controls="flush-collapseTen">
                                                    <p>
                                                        <i class="bi bi-envelope pr-2"></i>
                                                        Masukkan Lagu Pernikahan
                                                    </p>
                                                </button>
                                            </h2>

                                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlush">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="lagu" class="form-label">Masukkan Lagu
                                                                    Pernikahan (Upload Lagu Mu Sendiri)</label>
                                                                <input type="file" id="musik1" class="form-control"
                                                                    value="{{ $edit_form_pemesanan->musik }}" />
                                                                <br>
                                                                <label for="lagu" class="form-label">Lagu Yang Sudah
                                                                    Kamu Upload</label>
                                                                <br>
                                                                <audio controls>
                                                                    <source
                                                                        src="{{ asset("user_page/template/public/biodata_pelanggan/musik/$edit_form_pemesanan->musik") }}"
                                                                        type="audio/mpeg">
                                                                </audio>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Alamat URL Website -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingEleven">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven"
                                                    aria-expanded="false" aria-controls="flush-collapseEleven">
                                                    <p>
                                                        <i class="bi bi-share pr-2"></i>
                                                        Alamat URL Website
                                                    </p>
                                                </button>
                                            </h2>

                                            <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlush">
                                                <div class="accordion-body">

                                                    <div class="mb-3">
                                                        <label for="kpm" class="form-label">Nama Instagram :</label>
                                                        <input type="text" id="nama_instagram" class="form-control"
                                                            placeholder="ex : Nama Instagram" />

                                                        <div id="validationNamaInstagram" class="invalid-feedback"></div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="kpm" class="form-label">Nama Link :</label>
                                                        <input type="text" id="link_hosting"
                                                            value="{{ $edit_form_pemesanan->link_hosting }}"
                                                            class="form-control" placeholder="ex : Nama LINK" />

                                                        <div id="validationNamaLink" class="invalid-feedback"></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <button onclick="insertData()" type="submit"
                                                                    class="pesan-undangan btn float-end mt-3">
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
                                <!-- End Kiri -->

                                <!-- Kanan -->
                                <div class="col-lg-5 col-md-5 kanan">
                                    <div class="daftar-gambar">
                                        <iframe src="{{ $datas->link_hosting }}" frameborder="0" width="100%"
                                            height="100%"></iframe>
                                    </div>
                                </div>
                                <!-- End Kanan -->
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
        // deklarasi kan variable array dari Laravel Ke JS
        var previewTemplate = <?php echo json_encode($previewTemplate); ?>;

        let formBiodataPelanggan = document.getElementById('form-biodata-pelanggan');
        formBiodataPelanggan.addEventListener('submit', function(e) {
            e.preventDefault()
            let title = document.getElementById('title');
            let nomor_telepon = document.getElementById('nomor_telepon');
            let nama_panggilan_pria = document.getElementById('nama_panggilan_pria');
            let nama_panggilan_wanita = document.getElementById('nama_panggilan_wanita');
            let kata_pembuka = document.getElementById('kata_pembuka');
            let kutipan_ayat = document.getElementById('kutipan_ayat');
            let nama_lengkap_pria = document.getElementById('nama_lengkap_pria');
            let putra_dari = document.getElementById('putra_dari');
            let nama_bapak_pria = document.getElementById('nama_bapak_pria');
            let nama_ibu_pria = document.getElementById('nama_ibu_pria');
            let nama_lengkap_wanita = document.getElementById('nama_lengkap_wanita');
            let putri_dari = document.getElementById('putri_dari');
            let nama_bapak_wanita = document.getElementById('nama_bapak_wanita');
            let nama_ibu_wanita = document.getElementById('nama_ibu_wanita');
            if (previewTemplate.includes("akad")) {
                let tanggal_akad = document.getElementById('tanggal_akad');
                let jam_mulai_akad = document.getElementById('jam_mulai_akad');
                let waktu_wilayah_akad = document.getElementById('waktu_wilayah_akad');
                let lokasi_akad = document.getElementById('lokasi_akad');
            }
            if (previewTemplate.includes("resepsi1")) {
                let tanggal_resepsi = document.getElementById('tanggal_resepsi');
                let jam_mulai_resepsi = document.getElementById('jam_mulai_resepsi');
                let waktu_wilayah_resepsi = document.getElementById('waktu_wilayah_resepsi');
                let lokasi_resepsi = document.getElementById('lokasi_resepsi');
            }
            if (previewTemplate.includes("resepsi2")) {
                let tanggal_resepsi_2 = document.getElementById('tanggal_resepsi_2');
                let jam_mulai_resepsi_2 = document.getElementById('jam_mulai_resepsi_2');
                let waktu_wilayah_resepsi2 = document.getElementById('waktu_wilayah_resepsi2');
                let lokasi_resepsi_2 = document.getElementById('lokasi_resepsi_2');
            }
            let musik1 = document.getElementById('musik1');
            let nama_instagram = document.getElementById('nama_instagram');
            let link_hosting = document.getElementById('link_hosting');

            const formData = new FormData()
            formData.append("title", title.value)
            formData.append("nomor_telepon", nomor_telepon.value)
            formData.append("nama_panggilan_pria", nama_panggilan_pria.value)
            formData.append("nama_panggilan_wanita", nama_panggilan_wanita.value)
            formData.append("kata_pembuka", kata_pembuka.value)
            formData.append("kutipan_ayat", kutipan_ayat.value)
            formData.append("nama_lengkap_pria", nama_lengkap_pria.value)
            formData.append("putra_dari", putra_dari.value)
            formData.append("nama_bapak_pria", nama_bapak_pria.value)
            formData.append("nama_ibu_pria", nama_ibu_pria.value)
            formData.append("nama_lengkap_wanita", nama_lengkap_wanita.value)
            formData.append("putri_dari", putri_dari.value)
            formData.append("nama_bapak_wanita", nama_bapak_wanita.value)
            formData.append("nama_ibu_wanita", nama_ibu_wanita.value)
            if (previewTemplate.includes("akad")) {
                formData.append("tanggal_akad", tanggal_akad.value)
                formData.append("jam_mulai_akad", jam_mulai_akad.value)
                formData.append("waktu_wilayah_akad", waktu_wilayah_akad.value)
                formData.append("lokasi_akad", lokasi_akad.value)
            }
            if (previewTemplate.includes("resepsi1")) {
                formData.append("tanggal_resepsi", tanggal_resepsi.value)
                formData.append("jam_mulai_resepsi", jam_mulai_resepsi.value)
                formData.append("waktu_wilayah_resepsi", waktu_wilayah_resepsi.value)
                formData.append("lokasi_resepsi", lokasi_resepsi.value)
            }
            if (previewTemplate.includes("resepsi2")) {
                formData.append("tanggal_resepsi_2", tanggal_resepsi_2.value)
                formData.append("jam_mulai_resepsi_2", jam_mulai_resepsi_2.value)
                formData.append("waktu_wilayah_resepsi_2", waktu_wilayah_resepsi_2.value)
                formData.append("lokasi_resepsi_2", lokasi_resepsi_2.value)
            }
            formData.append("musik1", musik1.files[0])
            formData.append("nama_instagram", nama_instagram.value)
            formData.append("link_hosting", link_hosting.value)
            axios.post("{{ route('store_form_pemesanan', $edit_form_pemesanan->id_pemesanan) }}", formData)
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

                            if (dataError.title) {
                                let validationTitle = document.getElementById('validationTitle')
                                title.classList.add("is-invalid")
                                validationTitle.innerText = dataError.title[0]
                                validationTitle.style.display = "block"
                            }
                            if (dataError.nomor_telepon) {
                                let validationNomorTelepon = document.getElementById('validationNomorTelepon')
                                nomor_telepon.classList.add("is-invalid")
                                validationNomorTelepon.innerText = dataError.nomor_telepon[0]
                                validationNomorTelepon.style.display = "block"
                            }
                            if (dataError.nama_panggilan_pria) {
                                let validationPanggilanPria = document.getElementById('validationPanggilanPria')
                                nama_panggilan_pria.classList.add("is-invalid")
                                validationPanggilanPria.innerText = dataError.nama_panggilan_pria[0]
                                validationPanggilanPria.style.display = "block"
                            }
                            if (dataError.nama_panggilan_wanita) {
                                let validationPanggilanWanita = document.getElementById(
                                    'validationPanggilanWanita')
                                nama_panggilan_wanita.classList.add("is-invalid")
                                validationPanggilanWanita.innerText = dataError.nama_panggilan_wanita[0]
                                validationPanggilanWanita.style.display = "block"
                            }
                            if (dataError.kata_pembuka) {
                                let validationKataPembuka = document.getElementById(
                                    'validationKataPembuka')
                                kata_pembuka.classList.add("is-invalid")
                                validationKataPembuka.innerText = dataError.kata_pembuka[0]
                                validationKataPembuka.style.display = "block"
                            }
                            if (dataError.kutipan_ayat) {
                                let validationKutipanAyat = document.getElementById(
                                    'validationKutipanAyat')
                                kutipan_ayat.classList.add("is-invalid")
                                validationKutipanAyat.innerText = dataError.kutipan_ayat[0]
                                validationKutipanAyat.style.display = "block"
                            }
                            if (dataError.nama_lengkap_pria) {
                                let validationNamaLengkapPria = document.getElementById(
                                    'validationNamaLengkapPria')
                                nama_lengkap_pria.classList.add("is-invalid")
                                validationNamaLengkapPria.innerText = dataError.nama_lengkap_pria[0]
                                validationNamaLengkapPria.style.display = "block"
                            }
                            if (dataError.putra_dari) {
                                let validationKeteranganPasanganPria = document.getElementById(
                                    'validationKeteranganPasanganPria')
                                putra_dari.classList.add("is-invalid")
                                validationKeteranganPasanganPria.innerText = dataError.putra_dari[0]
                                validationKeteranganPasanganPria.style.display = "block"
                            }
                            if (dataError.nama_bapak_pria) {
                                let validationNamaAyahPria = document.getElementById(
                                    'validationNamaAyahPria')
                                nama_bapak_pria.classList.add("is-invalid")
                                validationNamaAyahPria.innerText = dataError.nama_bapak_pria[0]
                                validationNamaAyahPria.style.display = "block"
                            }
                            if (dataError.nama_ibu_pria) {
                                let validationNamaIbuPria = document.getElementById(
                                    'validationNamaIbuPria')
                                nama_ibu_pria.classList.add("is-invalid")
                                validationNamaIbuPria.innerText = dataError.nama_ibu_pria[0]
                                validationNamaIbuPria.style.display = "block"
                            }
                            if (dataError.nama_lengkap_wanita) {
                                let validationNamaLengkapWanita = document.getElementById(
                                    'validationNamaLengkapWanita')
                                nama_lengkap_wanita.classList.add("is-invalid")
                                validationNamaLengkapWanita.innerText = dataError.nama_lengkap_wanita[0]
                                validationNamaLengkapWanita.style.display = "block"
                            }
                            if (dataError.putri_dari) {
                                let validationKeteranganPasanganWanita = document.getElementById(
                                    'validationKeteranganPasanganWanita')
                                putri_dari.classList.add("is-invalid")
                                validationKeteranganPasanganWanita.innerText = dataError.putri_dari[0]
                                validationKeteranganPasanganWanita.style.display = "block"
                            }
                            if (dataError.nama_bapak_wanita) {
                                let validationNamaAyahWanita = document.getElementById(
                                    'validationNamaAyahWanita')
                                nama_bapak_wanita.classList.add("is-invalid")
                                validationNamaAyahWanita.innerText = dataError.nama_bapak_wanita[0]
                                validationNamaAyahWanita.style.display = "block"
                            }
                            if (dataError.nama_ibu_wanita) {
                                let validationNamaIbuWanita = document.getElementById(
                                    'validationNamaIbuWanita')
                                nama_ibu_wanita.classList.add("is-invalid")
                                validationNamaIbuWanita.innerText = dataError.nama_ibu_wanita[0]
                                validationNamaIbuWanita.style.display = "block"
                            }

                            if (dataError.musik1) {
                                let validationMusik = document.getElementById(
                                    'validationMusik')
                                musik1.classList.add("is-invalid")
                                validationMusik.innerText = dataError.musik1[0]
                                validationMusik.style.display = "block"
                            }

                            if (dataError.link_hosting) {
                                let validationNamaLink = document.getElementById(
                                    'validationNamaLink')
                                link_hosting.classList.add("is-invalid")
                                validationNamaLink.innerText = dataError.link_hosting[0]
                                validationNamaLink.style.display = "block"
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
                                    "{{ route('edit_form_gambar', $id_pemesanan) }}"
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
