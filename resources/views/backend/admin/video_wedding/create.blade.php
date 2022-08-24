@extends('layouts.admin')
@section('title', 'Video Wedding')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Video Wedding</h6>
                        <hr>
                        <br>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form_video_wedding">
                                @csrf

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Link Youtube Video</label>
                                    <input class="form-control" id="link_youtube" type="text"
                                        placeholder="Inputkan Link Hosting">
                                    <div id="validationLink" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="gambar" class="form-label">Ketegori Video</label>
                                    <select class="form-control" id="kategori" aria-label="Default select example">
                                        <option value="">Pilih Kategori Video</option>
                                        @foreach ($data_kategori_video as $kategori)
                                            <option value="{{ $kategori->id_kategori_video }}">
                                                {{ $kategori->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div id="validationKategori" class="invalid-feedback"></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('video_wedding.index') }}" class="btn btn-danger">Back</a>
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
        let formVideo = document.getElementById('form_video_wedding');
        formVideo.addEventListener('submit', function(e) {
            e.preventDefault()

            let kategori = document.getElementById('kategori');
            let link_youtube = document.getElementById('link_youtube');

            const formData = new FormData()
            formData.append("kategori", kategori.value)
            formData.append("link_youtube", link_youtube.value)

            axios.post("{{ route('video_wedding.store') }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.link_youtube) {
                                let validationLink = document.getElementById('validationLink')
                                link_youtube.classList.add("is-invalid")
                                validationLink.innerText = dataError.link_youtube[0]
                                validationLink.style.display = "block"
                            }

                            if (dataError.kategori) {
                                let validationKategori = document.getElementById('validationKategori')
                                kategori.classList.add("is-invalid")
                                validationKategori.innerText = dataError.kategori[0]
                                validationKategori.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('video_wedding.index') }}"
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
