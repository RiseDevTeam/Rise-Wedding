@extends('layouts.admin')
@section('title', 'Rincian Kategori Video')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Rincian Kategori Video</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-rincian-kategori">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kategori Video</label>
                                    <select class="form-control" id="kategori" aria-label="Default select example"
                                        required>
                                        <option value="{{ $edit->id_kategori_video }}">{{ $edit->kategori }}
                                        </option>
                                        @foreach ($data_kategori_video as $kategori)
                                            <option value="{{ $kategori->id_kategori_video }}">
                                                {{ $kategori->kategori }}</option>
                                        @endforeach
                                    </select>
                                    <div id="validationKategori" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Rincian Kategori
                                        Video</label>
                                    <textarea class="text-area" id="rincian_kategori" placeholder="Rincian Kategori Template">
                                        {!! $edit->rincian_kategori_video !!}
                                    </textarea>
                                </div>
                                <div id="validationRincianKategori" class="invalid-feedback"></div>

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('rincian_kategori_video.index') }}" class="btn btn-danger">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $id = Crypt::encrypt($edit->id_rincian_kategori_video);
    @endphp
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('.text-area'))
            .catch(error => {
                console.error(error);
            });
    </script>
    
@endsection

@push('script')
    <script>
        let formRincianKategori = document.getElementById('form-rincian-kategori');
        formRincianKategori.addEventListener('submit', function(e) {
            e.preventDefault()

            let kategori = document.getElementById('kategori');
            let rincian_kategori = document.getElementById('rincian_kategori');

            axios.put("{{ route('rincian_kategori_video.update', $id) }}", {
                    kategori: kategori.value,
                    rincian_kategori: rincian_kategori.value,
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

                            if (dataError.rincian_kategori) {
                                let validationRincian = document.getElementById(
                                    'validationRincianKategori')
                                rincian_kategori.classList.add("is-invalid")
                                validationRincian.innerText = dataError.rincian_kategori[0]
                                validationRincian.style.display = "block"
                            }

                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('rincian_kategori_video.index') }}"
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
