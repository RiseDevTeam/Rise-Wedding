<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- pemanggilan CSS -->
    @include('includes.frontend.css')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/custom-template.css') }}" />
    <!-- pemanggilan JS -->
    @include('includes.frontend.script')
    <title>Wedding | Custom Template</title>
</head>

<body>
    <!-- Chat -->
    <a href="https://api.whatsapp.com/send?phone=6289514640148&text=Hallo%20kak%20Saya%20ingin%20memesan%20Template"
        target="__blank" id="chatButton">
        <i class="bi bi-chat-right-text"></i>
        &nbsp; Chat dengan Lara
    </a>
    <!-- End Chat -->


    <form id="formPemesanan" method="POST" enctype="multipart/form-data"
        action="{{ route('pemesanan_template', $id_template) }}">
        @csrf
        <div class="container">
            <!-- Header -->
            <div class="kepala">
                <div class="logo">
                    <img src="{{ asset('user_page/template/public/img/logo.png') }}" alt="Logo">
                    <span>Custom Template</span>
                </div>

                <button type="submit" class="btn"
                    style="background: var(--warna1); color: var(--warna2)">Selesai</button>
            </div>
        </div>

        <div class="container">
            <ul class="sidebar">
                <!-- Isi Sidebar -->
            </ul>
            <div class="data">
                <!-- Isi Data -->
            </div>
        </div>
        <!-- End Isi -->
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var id_template = "{{ $id_template }}";

        var id_user = "{{ Auth::user()->id }}";

        getAllData()

        function getAllData() {
            axios({
                    method: 'GET',
                    url: `${window.location.origin}/api/risedev-wedding-users/template-invitation/detail-template/${id_template}`
                })
                .then((response) => {
                    let data = response.data
                    data.forEach(element => {
                        if (element.isActive == '1') {
                            document.querySelector('.sidebar').innerHTML += `
                            
                            <li class="field-button-tambah-${element.id_file_template}"> </li>
                            <li class="icon">
                                <a href="#">
                                    <img src="{{ asset('gambar/icon_template/${element.id_sub_kategori.icon}') }}" alt="Icon Template">
                                </a>
                            </li>
                            `
                            document.querySelector('.data').innerHTML += `
                
                <section class="isi_${element.id_file_template}">
                    <div class="container" id="template_${element.id_file_template}">
                        <input type="hidden" name="id_template" class="form-control" id="id_template" width="100" value="${element.id_template}">
                        <input type="hidden" name="file_template[]" class="form-control" id="file_template" width="100" value="${element.file}">
                        <input type="hidden" name="id_user" class="form-control" id="file_template" width="100" value="${id_user}">
                        <input type="hidden" name="keterangan_aktif[]" class="form-control" id="keterangan_aktif" width="100" value="${element.isActive}">
                        <input type="hidden" name="keterangan_file[]" class="form-control" id="keterangan_file" width="100" value="${element.keterangan}">
                        <div class="data-template d-flex justify-content-start align-items-start">
                            <div class="gambar">
                                <img src="{{ asset('gambar/gambar_template/${element.gambar_template}') }}" alt="Gambar Template" class="gambar-template">
                            </div>
                            <div class="tombol">
                                <button type="button" onclick="hapusTemplate(this)" id="${element.id_file_template}" class="hapus"><i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </section>
                `
                        } else {
                            document.querySelector('.sidebar').innerHTML += `
                                <li class="icon">
                                    <a href="#">
                                        <img src="{{ asset('gambar/icon_template/${element.id_sub_kategori.icon}') }}" alt="Icon template">
                                    </a>
                                </li>
                                `
                            document.querySelector('.data').innerHTML += `
                
                <section class="isi_${element.id_file_template}">
                    <div class="container" id="template_${element.id_file_template}">
                        <input type="hidden" name="id_template" class="form-control" id="id_template" width="100" value="${element.id_template}">
                        <input type="hidden" name="file_template[]" class="form-control" id="file_template" width="100" value="${element.file}">
                        <input type="hidden" name="id_user" class="form-control" id="file_template" width="100" value="${id_user}">
                        <input type="hidden" name="keterangan_aktif[]" class="form-control" id="keterangan_aktif" width="100" value="${element.isActive}">
                        <input type="hidden" name="keterangan_file[]" class="form-control" id="keterangan_file" width="100" value="${element.keterangan}">
                        <img src="{{ asset('gambar/gambar_template/${element.gambar_template}') }}" alt="Gambar Template">
                    </div>
                </section>
                `
                        }
                    });

                })

        }

        function hapusTemplate(e) {

            let isi = document.querySelector(`#template_${e.id}`)
            isi.remove();

            document.querySelector(`.field-button-tambah-${e.id}`).innerHTML = `
            <div class="test">
                    <button type="button" class="btn btn-primary btn-tambah_${e.id}" onclick="tambahTemplate(this)" id="${e.id}"><i class="bi bi-plus"></i></button>
            </div>
                    `
        }

        function tambahTemplate(e) {

            axios({
                    method: 'GET',
                    url: `${window.location.origin}/api/detail-template/ambil_satu/${e.id}/${id_template}`
                })
                .then((response) => {
                    let data = response.data
                    document.querySelector(`.isi_${e.id}`).innerHTML = `
                        <div class="container" id="template_${data.id_file_template}">
                            <input type="hidden" name="id_template" class="form-control" id="id_template" value="${data.id_template}">
                            <input type="hidden" name="file_template[]" class="form-control" id="file_template" value="${data.file}">
                            <input type="hidden" name="id_user" class="form-control" id="file_template" width="100" value="${id_user}">
                            <input type="hidden" name="keterangan_aktif[]" class="form-control" id="keterangan_aktif" width="100" value="${data.isActive}">
                            <input type="hidden" name="keterangan_file[]" class="form-control" id="keterangan_file" width="100" value="${data.keterangan}">
                        
                            <div class="data-template d-flex justify-content-start align-items-start">
                                <div class="gambar">
                                    <img src="{{ asset('gambar/gambar_template/${data.gambar_template}') }}" alt="Gambar Template">
                                </div>
                                <div class="tombol">
                                    <button type="button" onclick="hapusTemplate(this)" id="${data.id_file_template}" class="hapus"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    `
                    document.querySelector(`.btn-tambah_${data.id_file_template}`).remove()

                })

        }
    </script>
</body>

</html>
