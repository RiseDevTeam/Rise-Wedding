@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/pesanan.css') }}" />
@section('title', 'Pemesanan Saya')

@section('content_user')
    <section class="pesanan">
        <div class="container" id="basicwizard">
            <ul class="kepala-card nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item" data-target-form="#semuaPesanan" role="presentation">
                    <button class="nav-link active" id="semua-tab" data-bs-toggle="tab" data-bs-target="#semua"
                        type="button" role="tab" aria-controls="semua" aria-selected="true">
                        <i class="bx bxs-contact me-1"></i>
                        <span class="d-none d-sm-inline">Semua</span>
                    </button>
                </li>
                <li class="nav-item" data-target-form="#belumBayarPesanan" role="presentation">
                    <button class="nav-link" id="belumBayar-tab" data-bs-toggle="tab" data-bs-target="#belumBayar"
                        type="button" role="tab" aria-controls="belumBayar" aria-selected="false">
                        <i class="bx bxs-building me-1"></i>
                        <span class="d-none d-sm-inline">Belum Bayar</span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="selesai-tab" data-bs-toggle="tab" data-bs-target="#selesai" type="button"
                        role="tab" aria-controls="selesai" aria-selected="false">
                        <i class="bx bxs-check-circle me-1"></i>
                        <span class="d-none d-sm-inline">Selesai</span>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- Semua -->
                <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">
                    @forelse ($semua_pesanan as $pesananSaya)
                        <div class="tab-pane show active" id="semua">
                            <div class="card" id="tSelesai">
                                <div class="row">
                                    <div class="col-lg-3 template">
                                        <img src='{{ asset("gambar/gambar_cover_template/$pesananSaya->gambar_cover") }}'
                                            class="img-fluid mx-auto" alt="" />
                                    </div>
                                    <div class="col-lg-9 isi">
                                        <div class="kas">
                                            <span>Kategori : <b>Template {{ $pesananSaya->kategori_template }}</b></span>
                                            <span>
                                                @if ($pesananSaya->status_pemesanan == 'pending')
                                                    {{ 'Belum Bayar' }}
                                                @else
                                                    <div class="text-capitalize"> {{ $pesananSaya->status_pemesanan }}
                                                    </div>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="npalw">
                                            <h3 class="my-4">{{ $pesananSaya->nama_pria }} &
                                                {{ $pesananSaya->nama_wanita }}
                                            </h3>
                                            @if ($pesananSaya->status_pemesanan == 'pending')
                                                {{ 'Silahkan Melakukan Pembayaran paling lambat 1 X 24 jam' }} <br>
                                                {{ 'Dalam Kolom Belum Bayar' }}
                                            @else
                                                <a href="{{ route('hostingan_user', $pesananSaya->link_hosting) }}"
                                                    target="_blank" class="text-primary">Link Hosting :
                                                    {{ $pesananSaya->link_hosting }} </a>
                                            @endif
                                        </div>
                                        <div class="bagikan">
                                            <span>
                                                Bagikan : &nbsp;
                                                <a class="bi bi-whatsapp" href="#"></a>
                                                <a class="bi bi-telegram" href="#"></a>
                                            </span>
                                            <h4 class="harga">
                                                @if ($pesananSaya->status_pemesanan == 'sudah bayar')
                                                    Harga : <b>{{ number_format($pesananSaya->total) }}</b>
                                                @else
                                                    Harga : <b>{{ number_format($pesananSaya->harga) }}</b>
                                                @endif
                                            </h4>
                                        </div>

                                        {{-- @dd(Crypt::encrypt($pesananSaya->id_pemesanan)) --}}
                                        <div class="daftar-button">
                                            <div class="bpas">
                                                {{-- <button class="btn">
                                                    Preview
                                                </button> --}}
                                                <a href="{{ route('hostingan_user', $pesananSaya->link_hosting) }}"
                                                    class="btn" target="_blank">Preview</a>
                                                <a href="{{ route('edit_form_pemesanan', Crypt::encrypt($pesananSaya->id_pemesanan)) }}"
                                                    class="btn">Sunting</a>
                                                {{-- <button class="btn">
                                                    Sunting
                                                </button> --}}

                                            </div>
                                            @if ($pesananSaya->total)
                                                <button class="btn uab">
                                                    Ulasan
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="tab-pane show active" id="semua">
                            <div class="alert alert-warning" role="alert">
                                <center> Yukk Pesan Templatemu Sekarang </center>
                            </div>
                        </div>
                    @endforelse
                </div>
                <!-- endSemua -->

                <!-- Template Belum Bayar -->
                <div class="tab-pane fade" id="belumBayar" role="tabpanel" aria-labelledby="belumBayar-tab">
                    <!-- ? Belum Bayar -->
                    <div class="tab-pane" id="belumBayar">
                        <!-- Template Belum Bayar -->
                        <div class="card" id="tBelumBayar">
                            @forelse ($pembagian_pesanan as $pembagianPesanan)
                                @if ($pembagianPesanan->status_pemesanan == 'pending')
                                    <div class="row">
                                        <!-- Template Wedding -->

                                        <div class="col-lg-3 template">
                                            <img src='{{ asset("gambar/gambar_cover_template/$pembagianPesanan->gambar_cover") }}'
                                                class="img-fluid mx-auto" alt="" />
                                        </div>
                                        <!-- isi Card -->
                                        <div class="col-lg-9 isi">
                                            <!-- Kategori and Selesai -->
                                            <div class="kas">
                                                <span>Kategori : <b>Template
                                                        {{ $pembagianPesanan->kategori_template }}</b></span>
                                                <span>Belum Bayar</span>
                                            </div>
                                            <!-- Nama Pengantin and Link Wedding -->
                                            <div class="npalw">
                                                <h3 class="my-4">{{ $pembagianPesanan->nama_pria }} &
                                                    {{ $pembagianPesanan->nama_wanita }}
                                                </h3>
                                                {{ 'Silahkan Melakukan Pembayaran paling lambat 1 X 24 jam' }}
                                            </div>
                                            <!-- Bagikan -->
                                            <div class="bagikan">
                                                <span>

                                                </span>
                                                <h4 class="harga">Harga : <b>Rp.
                                                        {{ number_format($pembagianPesanan->harga) }}</b></h4>
                                            </div>
                                            <!-- Daftar Button -->
                                            <div class="daftar-button">
                                                <div class="bpas">
                                                </div>
                                                <!-- Ulasan and Bayar -->
                                                <a href="{{ route('pembayaran_template', Crypt::encrypt($pembagianPesanan->id_pemesanan)) }}"
                                                    class="btn uab mt-2">
                                                    Bayar
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End isi Card -->
                                    </div>
                                @endif
                            @empty
                                <div class="tab-pane show active" id="semua">
                                    <div class="alert alert-warning" role="alert">
                                        <center> Yukk Pesan Templatemu Sekarang </center>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- End Template Belum Bayar -->

                <!-- Selesai -->
                <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                    @forelse ($pembagian_pesanan as $pembagianPesanan)
                        <div class="tab-pane" id="selesai">
                            @if ($pembagianPesanan->status_pemesanan == 'selesai')
                                <!-- Template Wedding Selesai -->
                                <div class="card" id="tSelesai">
                                    <div class="row">
                                        <!-- Template Wedding -->

                                        <div class="col-lg-3 template">
                                            <img src='{{ asset("gambar/gambar_cover_template/$pembagianPesanan->gambar_cover") }}'
                                                class="img-fluid mx-auto" alt="" />
                                        </div>
                                        <!-- isi Card -->
                                        <div class="col-lg-9 isi">
                                            <!-- Kategori and Selesai -->
                                            <div class="kas">
                                                <span>Kategori : <b>Template
                                                        {{ $pembagianPesanan->kategori_template }}</b></span>
                                                <span>Template Selesai</span>
                                            </div>
                                            <!-- Nama Pengantin and Link Wedding -->
                                            <div class="npalw">
                                                <h3 class="my-4">{{ $pembagianPesanan->nama_pria }} &
                                                    {{ $pembagianPesanan->nama_wanita }}
                                                </h3>
                                                @if ($pembagianPesanan->status_pemesanan == 'pending')
                                                    {{ 'Silahkan Melakukan Pembayaran paling lambat 1 X 24 jam' }}
                                                @else
                                                    <a href="{{ route('hostingan_user', $pembagianPesanan->link_hosting) }}"
                                                        target="_blank" class="text-primary">Link Hosting :
                                                        {{ $pembagianPesanan->link_hosting }} </a>
                                                @endif
                                            </div>
                                            <!-- Bagikan -->
                                            <div class="bagikan">
                                                <span>
                                                    Bagikan : &nbsp;
                                                    <a class="bi bi-whatsapp" href="#"></a>
                                                    <a class="bi bi-telegram" href="#"></a>
                                                </span>
                                                <h4 class="harga">Harga : <b>Rp.
                                                        {{ number_format($pembagianPesanan->harga) }}</b></h4>
                                            </div>
                                            <!-- Daftar Button -->
                                            <div class="daftar-button">
                                                <div class="bpas">
                                                    <a href="{{ route('hostingan_user', $pesananSaya->link_hosting) }}"
                                                        class="btn">Preview</a>
                                                    <button class="btn">
                                                        Sunting
                                                    </button>
                                                </div>
                                                <!-- Ulasan and Bayar -->
                                                <a href="pembayaran.html" class="btn uab">
                                                    Ulasan
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End isi Card -->
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div class="tab-pane show active" id="semua">
                                <div class="alert alert-warning" role="alert">
                                    <center> Yukk Pesan Templatemu Sekarang </center>
                                </div>
                            </div>
                    @endforelse
                </div>
            </div>
            <!-- EndSelesai -->

        </div>
        </div>
    </section>
@endsection

@push('script')
    <script></script>
@endpush
