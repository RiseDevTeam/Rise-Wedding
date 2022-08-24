@extends('layouts.admin')
@section('title', 'Staff')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Staff</h6>
                        <hr>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="container-fluid">

                            <form method="POST" id="form-staff">
                                @method('PUT')
                                @csrf

                                <input value="{{ $edit->id }}" id="id" type="hidden">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" value="{{ $edit->name }}" id="name" type="text"
                                        placeholder="Nama Lengkap">
                                    <div id="validationName" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email</label>
                                    <input class="form-control" value="{{ $edit->email }}" id="email" type="text"
                                        placeholder="Email">
                                    <div id="validationEmail" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Password</label>
                                    <input class="form-control" value="{{ Crypt::decrypt($edit->password) }}" id="password"
                                        type="text" placeholder="Password">
                                    <div id="validationPassword" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" aria-label="Default select example">
                                        <option selected>{{ $edit->jenis_kelamin }}</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>

                                    <div id="validationJK" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nomor Telepon</label>
                                    <input class="form-control" value="{{ $edit->nomor_telepon }}" id="nomor_telepon"
                                        type="text" placeholder="Nomor Telepon">
                                    <div id="validationNomorTelepon" class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat</label>
                                    <textarea class="form-control" placeholder="Alamat" id="alamat">{{ $edit->alamat }}</textarea>
                                    <div id="validationAlamat" class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Foto Staff</label>
                                    <input type="file" class="form-control" id="foto" onchange="gambarSlide();">
                                    <div id="validationFoto" class="invalid-feedback"></div>

                                    <img id="slide-gambar" class="my-3" width="300"
                                        src="{{ asset('gambar/default_image.png') }}" />
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('staff.index') }}" class="btn btn-danger">Back</a>
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
        function gambarSlide() {
            document.getElementById("slide-gambar").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("foto").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("slide-gambar").src = oFREvent.target.result;
            };
        };

        let formStaff = document.getElementById('form-staff');
        formStaff.addEventListener('submit', function(e) {
            e.preventDefault()

            let id = document.getElementById('id');
            let name = document.getElementById('name');
            let email = document.getElementById('email');
            let password = document.getElementById('password');
            let jenis_kelamin = document.getElementById('jenis_kelamin');
            let nomor_telepon = document.getElementById('nomor_telepon');
            let alamat = document.getElementById('alamat');
            let foto = document.getElementById('foto');

            const formData = new FormData()
            formData.append("id", id.value)
            formData.append("name", name.value)
            formData.append("email", email.value)
            formData.append("password", password.value)
            formData.append("jenis_kelamin", jenis_kelamin.value)
            formData.append("nomor_telepon", nomor_telepon.value)
            formData.append("alamat", alamat.value)
            formData.append("foto", foto.files[0])
            formData.append("_method", "put");

            axios.post("{{ route('staff.update', $edit->id) }}", formData)
                .then(function(response) {
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.name) {
                                let StaffName = document.getElementById('validationName')
                                name.classList.add("is-invalid")
                                StaffName.innerText = dataError.name[0]
                                StaffName.style.display = "block"
                            }

                            if (dataError.email) {
                                let StaffEmail = document.getElementById('validationEmail')
                                email.classList.add("is-invalid")
                                StaffEmail.innerText = dataError.email[0]
                                StaffEmail.style.display = "block"
                            }

                            if (dataError.password) {
                                let StaffPassword = document.getElementById('validationPassword')
                                password.classList.add("is-invalid")
                                StaffPassword.innerText = dataError.password[0]
                                StaffPassword.style.display = "block"
                            }

                            if (dataError.jenis_kelamin) {
                                let StaffJK = document.getElementById('validationJK')
                                jenis_kelamin.classList.add("is-invalid")
                                StaffJK.innerText = dataError.jenis_kelamin[0]
                                StaffJK.style.display = "block"
                            }

                            if (dataError.nomor_telepon) {
                                let StaffNomorTelepon = document.getElementById('validationNomorTelepon')
                                nomor_telepon.classList.add("is-invalid")
                                StaffNomorTelepon.innerText = dataError.nomor_telepon[0]
                                StaffNomorTelepon.style.display = "block"
                            }

                            if (dataError.alamat) {
                                let StaffAlamat = document.getElementById('validationAlamat')
                                alamat.classList.add("is-invalid")
                                StaffAlamat.innerText = dataError.alamat[0]
                                StaffAlamat.style.display = "block"
                            }


                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href = "{{ route('staff.index') }}"
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
