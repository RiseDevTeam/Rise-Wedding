@extends('layouts.admin')
@section('title', 'Kategori Video')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Kategori Video</h6>
                        <hr>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">
                            <form method="POST" id="form-kategori-video">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kategori</label>
                                    <input class="form-control" id="kategori" type="text" value="{{ $edit->kategori }}"
                                        placeholder="Kategori">
                                    <div id="validationKategori" class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Harga</label>
                                    <input class="form-control" id="harga" type="text" value="{{ $edit->harga }}"
                                        placeholder="Harga">
                                    <div id="validationHarga" class="invalid-feedback"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('kategori_video.index') }}" class="btn btn-danger">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
    $id = Crypt::encrypt($edit->id_kategori_video);
    @endphp
@endsection

@push('script')
    <script>
        // scipt untuk harga rupiah
        var rupiah = document.getElementById('harga');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat ketik nominal di form kolom input
            // gunakan fungsi formatRupiah() untuk mengubah nominal angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka satuan ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
        // ! scipt untuk harga rupiah !


        let formKategori = document.getElementById('form-kategori-video');
        formKategori.addEventListener('submit', function(e) {
            e.preventDefault()

            let kategori = document.getElementById('kategori');
            // let id = ducument.getElementById('id_kategori_video');

            axios.put("{{ route('kategori_video.update', $id) }}", {
                    kategori: kategori.value,
                    harga: rupiah.value,
                }).then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.kategori) {
                                let headerKategori = document.getElementById('validationKategori')
                                kategori.classList.add("is-invalid")
                                headerKategori.innerText = dataError.kategori[0]
                                headerKategori.style.display = "block"
                            }

                            if (dataError.harga) {
                                let headerHarga = document.getElementById('validationHarga')
                                kategori.classList.add("is-invalid")
                                headerHarga.innerText = dataError.harga[0]
                                headerHarga.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('kategori_video.index') }}"
                            })
                        }
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        })
    </script>
@endpush
