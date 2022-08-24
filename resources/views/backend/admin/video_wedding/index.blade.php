@extends('layouts.admin')
@section('title', 'Video Wedding')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Video Wedding</h6>
                        <a href="{{ route('video_wedding.create') }}" class="btn btn-primary">
                            Tambah Video
                        </a>
                        <hr>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama Kategori</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Link Youtube</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Video</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($videoWedding as $video)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="text-xs font-weight-bold mb-0">
                                                            {{ $loop->iteration }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            {{ $video->kategori }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <a href="{{ $video->link_youtube }}"
                                                        target="_blank">{{ $video->link_youtube }}</a>
                                                </p>
                                            </td>

                                            <td class="text-center">
                                                <iframe width="360" height="215" src="{{ $video->link_youtube }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </td>

                                            <td class="align-middle text-center">
                                                @php
                                                    $id = Crypt::encrypt($video->id_video);
                                                @endphp
                                                <span class="badge badge bg-gradient-success"><a
                                                        href="{{ route('video_wedding.edit', $id) }}" class="text-white"><i
                                                            class="bi bi-pencil" style="font-size: 1.5rem"></i></a></span>

                                                <form method="POST" id="formHeroDelete">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="button" class="badge badge-sm bg-gradient-danger mt-2"
                                                        onclick="hapusVideo('{{ $video->id_video }}')"><i
                                                            class="bi bi-trash" style="font-size: 1.3rem"></i></a>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Data Masih Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <nav class="app-pagination">
                    <ul class="pagination justify-content-center">
                        {!! $videoWedding->links() !!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function hapusVideo(id) {
            Swal.fire({
                title: 'Yakin akan menghapus data ini?',
                text: "Ini seperti kenangan, kamu tidak dapat mengembalikannya",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Nggak jadi deh'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`video_wedding/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('video_wedding.index') }}"
                                })
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            })
        }
    </script>
