@extends('layouts.admin')
@section('title', 'Blog')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Blog</h6>
                        <hr>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-blog" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="form-group">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="judul" value="{{ $blog->judul }}"
                                        placeholder="Judul">
                                    <div id="validationJudul" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="thumbnail" class="form-label">Thumbnail</label>
                                    <input type="file" class="form-control" id="thumbnail" onchange="thumbnailSlide();">
                                    <div id="validationThumbnail" class="invalid-feedback"></div>

                                    @if ($blog->thumbnail)
                                        <img id="slide-gambar" class="my-3" width="300"
                                            src='{{ asset("gambar/gambar_blog/thumbnail/$blog->thumbnail") }}' />
                                    @else
                                        <img id="slide-gambar" class="my-3" width="300"
                                            src='{{ asset('gambar/default_image.png') }}' />
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" value="{{ $blog->tanggal }}"
                                        placeholder="tanggal">
                                    <div id="validationTanggal" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Isi Blog
                                            Template</label>
                                        <textarea class="isi" id="isi" placeholder="Isi Blog" onchange="setIsiBlog()">{{ $blog->isi_blog }}</textarea>
                                    </div>
                                    <div id="validationIsi" class="invalid-feedback"></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('blog.index') }}" class="btn btn-danger">Back</a>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        CKEDITOR.replace('isi', {
            height: 600,
            filebrowserUploadUrl: "{{ route('blog.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });

        function thumbnailSlide() {
            document.getElementById("slide-gambar").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("thumbnail").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("slide-gambar").src = oFREvent.target.result;
            };
        };

        let blog = document.getElementById('form-blog');
        blog.addEventListener('submit', function(e) {
            e.preventDefault()

            let judul = document.getElementById('judul');
            let thumbnail = document.getElementById('thumbnail');
            let tanggal = document.getElementById('tanggal');
            var isi = CKEDITOR.instances.isi.getData();

            const formData = new FormData()
            formData.append("judul", judul.value)
            formData.append("tanggal", tanggal.value)
            formData.append("thumbnail", thumbnail.files[0])
            formData.append("isi", isi)
            formData.append("_method", "put");

            axios.post("{{ route('blog.update', $blog->slug) }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {

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
