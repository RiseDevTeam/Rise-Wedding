@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/data-tamu.css') }}" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@section('title', 'Data Tamu')
@section('content_user')
    <script src="{{ asset('user_page/template/public/js/jquery-3.6.1.min.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <div class="data-tamu">
        <div class="container">
            <!-- Kepala -->
            <div class="kepala my-3 d-flex justify-content-between align-items-baseline">
                <h5 class="fw-bold">Kelola Data Tamu</h5>
                <a href="#" class="btn">
                    <i class="bi bi-send"></i>
                    Lihat Website
                </a>
            </div>
            <!-- Card Isi Data Tamu -->
            <div class="isi">
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                    Daftar Tamu
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    Riwayat Pesan
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- * Content -->
                    <div class="container isi-tamu">
                        <!-- ? Daftar Tamu -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <!-- TODO Kepala Isi Tamu -->
                                <div class="kepala-isi-tamu mt-3">
                                    <div class="row">
                                        <!-- row 1 -->
                                        <div class="baris1 col-lg-8 col-md-8 d-flex align-items-lg-baseline">
                                            <!-- ========================= Tambah Data Tamu ========================== -->
                                            <button class="btn btn-tambah me-3" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop1">
                                                <i class="bi bi-plus-lg"></i>
                                                Tambah
                                            </button>
                                            <!-- Modal Tambah -->
                                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center d-block">
                                                            <h4 class="modal-title fw-bold" id="staticBackdropLabel">
                                                                Tambah Tamu
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST">
                                                                <input type="hidden" id="id_pemesanan"
                                                                    value="{{ $hostingan->id_pemesanan }}">
                                                                <div class="mb-2">
                                                                    <label for="napa" class="form-label">Nama
                                                                        Tamu</label>
                                                                    <input type="text" id="nama_tamu"
                                                                        class="form-control" placeholder="Nama Tamu..." />
                                                                    <div id="validationName" class="invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="email" class="form-label">Email
                                                                        Tamu</label>
                                                                    <input type="email" id="email"
                                                                        class="form-control" placeholder="Email..." />
                                                                    <div id="validationEmail" class="invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="nowa" class="form-label">No
                                                                        Whatsapp Tamu</label>
                                                                    <input type="number" id="no_wa"
                                                                        class="form-control" placeholder="No Whatsapp..." />
                                                                    <div id="validationNomorWa" class="invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="alamat" class="form-label">Alamat
                                                                        Tamu</label>
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control" id="alamat" style="height: 100px; width: 100%"></textarea>
                                                                        <label for="floatingTextarea">Alamat...</label>
                                                                        <div id="validationAlamat"
                                                                            class="invalid-feedback">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn batal"
                                                                data-bs-dismiss="modal">
                                                                Batal
                                                            </button>
                                                            <button type="button" onclick="SubmitTamu()"
                                                                class="btn simpan">
                                                                Simpan
                                                            </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ========================== End Tambah Data Tamu ========================== -->

                                            <!-- ========================== Upload Data Tamu ========================== -->
                                            <button class="btn btn-impor me-3" data-bs-toggle="modal"
                                                data-bs-target="#importModal">
                                                <i class="bi bi-box-arrow-in-down"></i>
                                                Impor
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="importModal" tabindex="-1"
                                                aria-labelledby="importModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="importModalLabel">Upload Data Tamu
                                                                Undangan Mu
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" id="form-file-tamu"
                                                            enctype="multipart/form-data">
                                                            <div class="modal-body">

                                                                <div class="mt-1 mb-3">
                                                                    <small class="text-muted"
                                                                        style="font-style: italic">Note : Pastikan Kamu
                                                                        Sudah Download Form Data Tamu (.xlsx)</small>
                                                                </div>

                                                                <input type="file" id="file">
                                                                <div id="validationFile" class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- ========================== END Upload Data Tamu ========================== -->
                                            <button class="btn btn-ekspor me-3">
                                                <i class="bi bi-box-arrow-up"></i>
                                                Ekspor
                                            </button>
                                            <a href="#" class="link-dt">
                                                <i class="bi bi-download"></i>
                                                Download Form Data Tamu (.xlsx)
                                            </a>
                                        </div>
                                        <!-- row 2 -->
                                        <div class="col-lg-4">
                                            <!-- Searching -->
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control"
                                                    placeholder="Recipient's username" aria-label="Recipient's username"
                                                    aria-describedby="button-addon2" />
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="button-addon2">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                            <!-- Sesi Acara -->
                                            <div class="input-group">
                                                <label class="input-group-text" for="inputGroupSelect01">Filter Sesi
                                                    Acara</label>
                                                <select class="form-select" id="inputGroupSelect01">
                                                    <option selected>= Pilih Sesi Acara =</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- TODO Badan Isi Tamu -->
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nomor</th>
                                                <th scope="col">Nama Tamu</th>
                                                <th scope="col">Link Undangan</th>
                                                <th scope="col">No. WA</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Bagikan</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data_tamu as $tamu)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td>{{ $tamu->nama_tamu }}</td>
                                                    <td class="link">
                                                        <a href="{{ route('hostingan_user', ['link_hosting' => $hostingan->link_hosting, 'nama' => $tamu->nama_tamu]) }}"
                                                            target="_blank" class="text-primary">
                                                            {{ $hostingan->link_hosting }}/{{ $tamu->nama_tamu }}
                                                        </a>
                                                    </td>
                                                    <td>{{ $tamu->whatsapp }}</td>
                                                    <td>{{ $tamu->alamat }}</td>
                                                    <td class="share">
                                                        <a href="javascript:void(0)"
                                                            onclick="showWa({{ $tamu->id_biodata_tamu_undangan }})"
                                                            class="btn">
                                                            <i class="bi bi-whatsapp"></i>
                                                            whatsapp
                                                        </a>
                                                    </td>
                                                    <td class="aksi">
                                                        <button class="hapus p-1 btn">
                                                            <i class="bi bi-trash"></i>
                                                        </button>

                                                        <a href="javascript:void(0)"
                                                            onclick="editData({{ $tamu->id_biodata_tamu_undangan }})"
                                                            class="edit p-1 btn">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        {{-- <a href="#"
                                                            onclick="editData($tamu->id_biodata_tamu_undangan)"
                                                            class="edit p-1 btn">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a> --}}

                                                    </td>
                                                </tr>
                                            @empty
                                                {{ 'Data Masih Kosong' }}
                                            @endforelse

                                        </tbody>
                                    </table>
                                    <nav aria-label="Page navigation example" style="color : #f88c54">
                                        <ul class="pagination justify-content-center">
                                            {{ $data_tamu->links() }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- ? Riwayat Pesan -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut,
                                qui?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Share ke wa -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header text-center d-block">
                    <h4 class="modal-title fw-bold" id="staticBackdropLabel">
                        Share Ke Whatsapp (Manual)
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="tamu" class="form-label">Nama
                            Tamu</label>
                        {{-- <input class="form-control" type="text"
                            value="{{ $tamu->nama_tamu }} ({{ $tamu->whatsapp }})" aria-label="Disabled input example"
                            disabled readonly /> --}}
                        <input class="form-control" type="text" id="share_nama_tamu"
                            aria-label="Disabled input example" disabled readonly />
                    </div>

                    <div class="mb-2">
                        <label for="nowa" class="form-label">No
                            Whatsapp</label>
                        <input type="text" class="form-control" id="share_no_wa" placeholder="No Whatsapp..." />
                    </div>
                    <div class="mb-2">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea" id="share_alamat" style="height: 100px; width: 100%"></textarea>
                            <label for="floatingTextarea">Alamat...</label>
                        </div>
                    </div>
                    <label for="pretem" class="form-label">Preview
                        Template</label>
                    <div class="editor" name="text-area" id="editor">
                        Assalamu'alaikum Warahmatullahi Wabarakatuh
                        <p><br>
                            Yth. Bapak/Ibu/Saudara/i
                        <p><br>
                            Merupakan suatu kehormatan bagi kami apabila
                            Bapak/Ibu/Saudara/i dapat menghadiri/menyaksikan
                            acara Tasyakuran Aqiqah anak kami dengan tautan
                            undangan dibawah ini:
                        <p><br>
                            <a href="{{ route('hostingan_user', ['link_hosting' => $hostingan->link_hosting, 'nama' => $tamu->nama_tamu]) }}"
                                target="_blank" class="text-primary">
                                {{ $hostingan->link_hosting }}/{{ $tamu->nama_tamu }}
                            </a>

                        <p><br>
                            Tak lupa kami juga memohon ucapan, harapan,
                            serta
                            doa dari Bapak/Ibu/Saudara/i untuk kelancaran
                            acara
                            Tasyakuran Aqiqah yang akan kami selenggarakan.
                            Atas perhatiannya, kami ucapkan terima kasih.

                            Wassalamualaikum Wr. Wb.
                    </div>
                    <div class="preview-template mb-2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Share ke wa -->

    <!-- Modal Edit -->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header text-center d-block">
                    <h4 class="modal-title fw-bold" id="staticBackdropLabel">
                        Edit Tamu
                    </h4>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="napa" class="form-label">Nama
                                Tamu</label>
                            <input type="hidden" id="id_biodata_tamu_undangan">
                            <input type="text" id="nama_tamu_edit" class="form-control"
                                placeholder="Nama Panggilan..." />
                            <div id="validationTamuEdit" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email
                                Tamu</label>
                            <input type="email" id="email_edit" class="form-control" placeholder="Email..." />
                            <div id="validationEmail" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="nowa" class="form-label">No
                                Whatsapp Tamu</label>
                            <input type="text" id="no_wa_edit" class="form-control" placeholder="No Whatsapp..." />
                            <div id="validationWA" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="alamat" class="form-label">Alamat Tamu</label>
                            <div class="form-floating">
                                <textarea class="form-control" id="alamat_edit" style="height: 100px; width: 100%"></textarea>
                                <div id="validationAlamat" class="invalid-feedback"></div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" onclick="updateTamu();" class="btn">
                        Simpan
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Edit -->
@endsection

@push('script')
    <script>
        var quill = new Quill('.editor', {
            theme: 'snow'
        });
    </script>

    <script>
        let formFileTamu = document.getElementById('form-file-tamu');
        formFileTamu.addEventListener('submit', function(e) {
            e.preventDefault()
            let file = document.getElementById('file');

            const formData = new FormData()
            formData.append("file", file.files[0])
            axios.post("{{ route('import_tamu_undangan') }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {

                            if (dataError.file) {
                                let validationFile = document.getElementById(
                                    'validationFile')
                                file.classList.add("is-invalid")
                                validationFile.innerText = dataError.file[0]
                                validationFile.style.display = "block"
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
                                    ""
                            })
                        }
                    }
                })
                .catch(function(error) {
                    swal({
                        title: "Data mu ada yang error",
                        text: "silahkan cek kembali yaaa, jika masih tidak bisa silahkan hubungi admin",
                        icon: "warning",
                        dangerMode: true,
                    })
                });
        })

        function SubmitTamu() {
            var nama_tamu = document.getElementById('nama_tamu');
            var id_pemesanan = document.getElementById('id_pemesanan');
            var email = document.getElementById('email');
            var no_wa = document.getElementById('no_wa');
            var alamat = document.getElementById('alamat');

            const formData = new FormData()
            formData.append("nama_tamu", nama_tamu.value)
            formData.append("id_pemesanan", id_pemesanan.value)
            formData.append("email", email.value)
            formData.append("no_wa", no_wa.value)
            formData.append("alamat", alamat.value)

            axios.post("{{ route('tamu_undangan_store') }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.nama_tamu) {
                                let TamuNama_tamu = document.getElementById('validationName')
                                nama_tamu.classList.add("is-invalid")
                                TamuNama_tamu.innerText = dataError.nama_tamu[0]
                                TamuNama_tamu.style.display = "block"
                            }

                            if (dataError.email) {
                                let TamuEmail = document.getElementById('validationEmail')
                                email.classList.add("is-invalid")
                                TamuEmail.innerText = dataError.email[0]
                                TamuEmail.style.display = "block"
                            }

                            if (dataError.no_wa) {
                                let Tamu_no_wa = document.getElementById('validationNomorWa')
                                password.classList.add("is-invalid")
                                Tamu_no_wa.innerText = dataError.no_wa[0]
                                Tamu_no_wa.style.display = "block"
                            }

                            if (dataError.alamat) {
                                let TamuAlamat = document.getElementById('validationAlamat')
                                alamat.classList.add("is-invalid")
                                TamuAlamat.innerText = dataError.alamat[0]
                                TamuAlamat.style.display = "block"
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
                                    ""
                            })
                        }
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function editData(id_biodata_tamu_undangan) {
            var id_biodata = id_biodata_tamu_undangan

            axios.get("{{ url('risedev-wedding-users/tamu_undangan_edit') }}", {
                    params: {
                        id_biodata: id_biodata
                    }
                })
                .then(function(response) {
                    if (response.status == 200) {
                        var res = response.data

                        const id_biodata = document.getElementById('id_biodata_tamu_undangan');
                        const nama_tamu_edit = document.getElementById('nama_tamu_edit');
                        const email_edit = document.getElementById('email_edit');
                        const no_wa_edit = document.getElementById('no_wa_edit');
                        const alamat_edit = document.getElementById('alamat_edit');

                        id_biodata.value = res.id_biodata_tamu_undangan;
                        nama_tamu_edit.value = res.nama_tamu;
                        email_edit.value = res.email;
                        no_wa_edit.value = res.whatsapp;
                        alamat_edit.value = res.alamat;


                        $('#staticBackdrop3').modal('show')
                    } else {
                        console.log("error cuy");
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });

        }

        function updateTamu() {
            var id_biodata = document.getElementById('id_biodata_tamu_undangan');
            var nama_tamu_edit = document.getElementById('nama_tamu_edit');
            var email_edit = document.getElementById('email_edit');
            var no_wa_edit = document.getElementById('no_wa_edit');
            var alamat_edit = document.getElementById('alamat_edit');

            const formData = new FormData()
            formData.append("id_biodata", id_biodata.value)
            formData.append("nama_tamu_edit", nama_tamu_edit.value)
            formData.append("email_edit", email_edit.value)
            formData.append("no_wa_edit", no_wa_edit.value)
            formData.append("alamat_edit", alamat_edit.value)

            axios.post("{{ url('risedev-wedding-users/tamu_undangan_update') }}", formData)
                .then((response) => {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.nama_tamu_edit) {
                                let validationTamuEdit = document.getElementById('validationTamuEdit')
                                nama_tamu_edit.classList.add("is-invalid")
                                validationTamuEdit.innerText = dataError.nama_tamu_edit[0]
                                validationTamuEdit.style.display = "block"
                            }

                            if (dataError.email_edit) {
                                let validationEmail = document.getElementById('validationEmail')
                                email_edit.classList.add("is-invalid")
                                validationEmail.innerText = dataError.email_edit[0]
                                validationEmail.style.display = "block"
                            }

                            if (dataError.no_wa_edit) {
                                let validationWA = document.getElementById('validationWA')
                                no_wa_edit.classList.add("is-invalid")
                                validationWA.innerText = dataError.no_wa_edit[0]
                                validationWA.style.display = "block"
                            }

                            if (dataError.alamat_edit) {
                                let validationAlamat = document.getElementById('validationAlamat')
                                alamat_edit.classList.add("is-invalid")
                                validationAlamat.innerText = dataError.alamat_edit[0]
                                validationAlamat.style.display = "block"
                            }
                        } else {
                            swal({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 2000
                            }).then(function() {
                                window.location.href =
                                    ""
                            })
                        }
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function showWa(id_nama_tamu) {
            var id_tamu = id_nama_tamu

            axios.get("{{ url('risedev-wedding-users/share_tamu') }}", {
                    params: {
                        id_tamu: id_tamu
                    }
                })
                .then(function(response) {
                    $('#staticBackdrop2').modal('show')
                    // var dataTamu = response.data;
                    // console.log(dataTamu.whatsapp);

                    // $('#staticBackdrop2').modal('show')
                    // if (response.status == 200) {
                    //     var res = response.data

                    //     const id_biodata = document.getElementById('id_biodata_tamu_undangan');
                    //     const nama_tamu_edit = document.getElementById('nama_tamu_edit');
                    //     const email_edit = document.getElementById('email_edit');
                    //     const no_wa_edit = document.getElementById('no_wa_edit');
                    //     const alamat_edit = document.getElementById('alamat_edit');

                    //     id_biodata.value = res.id_biodata_tamu_undangan;
                    //     nama_tamu_edit.value = res.nama_tamu;
                    //     email_edit.value = res.email;
                    //     no_wa_edit.value = res.whatsapp;
                    //     alamat_edit.value = res.alamat;



                    // } 
                    // else {
                    //     console.log("error cuy");
                    // }
                })
                .catch(function(error) {
                    console.log(error);
                });

        }
    </script>
@endpush
