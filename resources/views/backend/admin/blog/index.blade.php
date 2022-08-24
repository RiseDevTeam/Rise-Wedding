@extends('layouts.admin')
@section('title', 'Blog')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('blog.create') }}" class="btn btn-primary">Tambah Data</a>
                        <hr>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Judul</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status Aktif</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataBlog as $blog)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $blog->judul }}</h6>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $blog->tanggal }}</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="text-center form-check form-switch ps-0">
                                                    <input data-id="{{ $blog->id_blog }}"
                                                        class="toggle-class form-check-input ms-auto" type="checkbox"
                                                        data-toggle="toggle" data-on="Active" data-off="InActive"
                                                        {{ $blog->isActive ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-sm bg-gradient-warning">
                                                    <a href="{{ route('blog.preview', $blog->slug) }}" target="_blank"
                                                        class="text-white">
                                                        <i class="bi bi-eye-fill" style="font-size: 1.5rem"></i>
                                                    </a>
                                                </span>
                                                <span class="badge badge-sm bg-gradient-success">
                                                    <a href="{{ route('blog.edit', $blog->slug) }}" class="text-white">
                                                        <i class="bi bi-pencil" style="font-size: 1.5rem"></i>
                                                    </a>
                                                </span>
                                                <form method="POST" id="formHeroDelete">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="button" class="badge badge-sm bg-gradient-danger mt-2"
                                                        onclick="hapusBlog('{{ $blog->slug }}')">
                                                        <i class="bi bi-trash" style="font-size: 1.3rem"></i>
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
                        {!! $dataBlog->links() !!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id_blog = $(this).data('id');

                console.log(id_blog)
                console.log(status)

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "{{ route('blog.changeStatus') }}",
                    data: {
                        'status': status,
                        'id_blog': id_blog
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection

@push('script')
    <script>
        function hapusBlog(slug) {
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
                    axios.delete(`blog/${slug}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('blog.index') }}"
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
