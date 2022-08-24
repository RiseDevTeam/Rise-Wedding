@extends('layouts.admin')
@section('title', 'Staff')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Staff</h6>
                        <a href="{{ route('staff.create') }}" class="btn btn-primary">Tambah Data</a>
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
                                            Nama</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis Kelamin</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor Telefon</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Alamat</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Foto
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataStaff as $staff)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $staff->name }}</h6>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $staff->email }}</span>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $staff->jenis_kelamin }}</span>
                                            </td>
                                            <td class="text-center">

                                                <a target="_blank" class="btn btn-primary mt-2"
                                                    href="https://web.whatsapp.com/send?phone=<?php echo '62' . $staff->nomor_telepon; ?>&text=Hallo Rise Poeple,  Apakah Kamu Sudah Siap Bekerja?
                                                        Hormat kami;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                        Rise Development ">
                                                    {{ $staff->nomor_telepon }}</a>


                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $staff->alamat }}</span>
                                            </td>
                                            <td class="text-center">
                                                <img src='{{ asset("admin/img/$staff->foto") }}' width="100"
                                                    alt="Staff">
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <span class="badge badge bg-gradient-success">
                                                        <a href="{{ route('staff.edit', Crypt::encrypt($staff->id)) }}"
                                                            class="text-white"><i class="bi bi-pencil"
                                                                style="font-size: 1.5rem"></i></a></span>
                                                    <form method="POST" id="formHeroDelete">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="button"
                                                            class="badge badge-sm bg-gradient-danger mt-2"
                                                            onclick="hapusStaff('{{ $staff->id }}')"><i
                                                                class="bi bi-trash" style="font-size: 1.3rem"></i></a>
                                                        </button>
                                                    </form>
                                                </span>
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
                        {!! $dataStaff->links() !!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function hapusStaff(id) {
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
                    axios.delete(`staff/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('staff.index') }}"
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
@endpush
