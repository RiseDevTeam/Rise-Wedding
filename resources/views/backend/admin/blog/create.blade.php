@extends('layouts.admin')
@section('title', 'Tambah Blog')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Blog</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-blog" enctype='multipart/form-data'>
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Judul</label>
                                    <input class="form-control" id="judul" type="text" placeholder="Judul">
                                    <div id="validationJudul" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Thumbnail</label>
                                    <input class="form-control" id="thumbnail" type="file" onchange="gambarSlide();">
                                    <div id="validationThumbnail" class="invalid-feedback"></div>

                                    <img id="slide-gambar" class="my-3" width="300" src="{{ asset('gambar/default_image.png') }}" />
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal</label>
                                    <input class="form-control" id="tanggal" type="date" placeholder="Tanggal">
                                    <div id="validationTanggal" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Isi Blog
                                            Template</label>
                                        <textarea class="isi" id="isi" placeholder="Isi Blog" onchange="setIsiBlog()"></textarea>
                                    </div>
                                    <div id="validationIsi" class="invalid-feedback"></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        

        function gambarSlide() {
            document.getElementById("slide-gambar").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("thumbnail").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("slide-gambar").src = oFREvent.target.result;
            };
        };

        CKEDITOR.replace('isi', {
            height: 600,
            filebrowserUploadUrl: "{{route('blog.upload', ['_token' => csrf_token()])}}",
            filebrowserUploadMethod: 'form'
        });
        
    </script>
@endsection

@push('script')
    <script>
        
        let subKategori = document.getElementById('form-blog');
        subKategori.addEventListener('submit', function(e) {
            e.preventDefault()

            // let isi = document.getElementById('isi');
            var isi = CKEDITOR.instances.isi.getData();
            let judul = document.getElementById('judul');
            let thumbnail = document.getElementById('thumbnail');
            let tanggal = document.getElementById('tanggal');

            const formData = new FormData()
            formData.append("judul", judul.value)
            formData.append("isi", isi)
            formData.append("tanggal", tanggal.value)
            formData.append("thumbnail", thumbnail.files[0])

            axios.post("{{ route('blog.store') }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.judul) {
                                let headerJudul = document.getElementById('validationJudul')
                                judul.classList.add("is-invalid")
                                headerJudul.innerText = dataError.judul[0]
                                headerJudul.style.display = "block"
                            }

                            if (dataError.isi) {
                                let validationIsi = document.getElementById('validationIsi')
                                isi.classList.add("is-invalid")
                                validationIsi.innerText = dataError.isi[0]
                                validationIsi.style.display = "block"
                            }

                            if (dataError.tanggal) {
                                let headerTanggal = document.getElementById('validationTanggal')
                                tanggal.classList.add("is-invalid")
                                headerTanggal.innerText = dataError.tanggal[0]
                                headerTanggal.style.display = "block"
                            }


                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('blog.index') }}"
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
