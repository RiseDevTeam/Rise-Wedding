<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html"
            target="_blank">
            <img src="{{ asset('admin/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Soft UI Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  {{ set_active('dashboard') }}" href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>shop </title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(0.000000, 148.000000)">
                                            <path class="color-background opacity-6"
                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                            </path>
                                            <path class="color-background"
                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#KelolaAkun"
                    class="nav-link {{ set_active('pimpinan.index') }} {{ set_active('pelanggan.index') }} {{ set_active('staff.index') }} 
                    {{ set_active('staff.create') }} {{ set_active('staff.edit') }}
                    "
                    aria-controls="menu-video" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">Kelola Akun </span>
                </a>
                <div class="collapse " id="KelolaAkun">
                    <ul class="nav ms-4 ps-3">

                        <li class="nav-item">
                            <a class="nav-link {{ set_active('pimpinan.index') }}" href="{{ route('pimpinan.index') }}">
                                <span class="sidenav-normal"> Pimpinan </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ set_active('staff.index') }}" href="{{ route('staff.index') }}">
                                <span class="sidenav-normal"> Staff </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ set_active('pelanggan.index') }}"
                                href="{{ route('pelanggan.index') }}">
                                <span class="sidenav-normal">Pelanggan </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ set_active('blog.index') }} {{ set_active('blog.create') }} {{ set_active('blog.edit') }} "
                    href="{{ route('blog.index') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path
                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Blog</span>
                </a>
            </li>

            <li class="nav-item {{ set_active('kategori.index') }}">
                <a data-bs-toggle="collapse" href="#pagesExamples"
                    class="nav-link {{ set_active('kategori.index') }} {{ set_active('kategori.create') }} {{ set_active('kategori.edit') }}  
                    {{ set_active('rincian_kategori.index') }} {{ set_active('rincian_kategori.create') }} {{ set_active('rincian_kategori.edit') }} 
                    {{ set_active('sub_kategori.index') }} {{ set_active('sub_kategori.create') }} {{ set_active('sub_kategori.edit') }} 
                    {{ set_active('musik.index') }} {{ set_active('musik.create') }} {{ set_active('musik.edit') }} 
                    {{ set_active('template.index') }} {{ set_active('template.create') }} {{ set_active('template.edit') }} 
                    {{ set_active('file_template.show') }} {{ set_active('file_template.create') }} {{ set_active('file_template.edit') }} 
                    "
                    aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-files" viewBox="0 0 16 16">
                            <path
                                d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Template Wedding </span>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav ms-4 ps-3">

                        <li class="nav-item ">
                            <a class="nav-link {{ set_active('kategori.index') }}"
                                href="{{ route('kategori.index') }}">
                                <span class="sidenav-normal"> Kategori Template </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link {{ set_active('rincian_kategori.index') }}"
                                href="{{ route('rincian_kategori.index') }}">
                                <span class="sidenav-normal">Rincian Kategori Template </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link {{ set_active('sub_kategori.index') }}"
                                href="{{ route('sub_kategori.index') }}">
                                <span class="sidenav-normal"> Sub Kategori </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link {{ set_active('musik.index') }}" href="{{ route('musik.index') }}">
                                <span class="sidenav-normal"> Musik Template </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ set_active('template.index') }}"
                                href="{{ route('template.index') }}">
                                <span class="sidenav-normal"> Template Invitation </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ set_active('data-pemesanan') }}" href="{{ route('data-pemesanan') }}">
                    <div
                        class="btn-primary position-relative icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=""
                                class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg>
                            <span id="angka" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                
                            </span>
                        
                    </div>
                    <span class="nav-link-text ms-1">Pesanan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ set_active('data-pembayaran') }}" href="{{ route('data-pembayaran') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path
                                d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                        </svg>

                        <span id="badge_pembayaran" class="position-absolute start-60 translate-middle badge rounded-pill bg-danger" style = "margin-top:-18px; margin-left:50px"></span>
                    </div>
                    <span class="nav-link-text ms-1">Pembayaran
                    </span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background"
                style="background-image: url('../admin/img/curved-images/white-curved.jpeg')">
            </div>
            <div class="card-body text-start p-3 w-100">
                <div
                    class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                    <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true"
                        id="sidenavCardIcon"></i>
                </div>
                <div class="docs-info">
                    <h6 class="text-white up mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold">Please check our docs</p>
                    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard"
                        target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                </div>
            </div>
        </div>
        <a class="btn bg-gradient-primary mt-4 w-100"
            href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree" type="button">Upgrade
            to pro</a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    <script>

    newPesanan();

    function newPesanan(){
        document.getElementById('angka').innerHTML = '';

        axios.get("{{ route('new-pesanan') }}")
        .then((response) => {
            let data = response.data;
            // console.log(response.data)

            if(data !== 0){
                document.querySelector('#angka').innerHTML = data
            }
            // else{
            //     document.querySelector('#angka').innerHTML = 5 
            // }

        }).catch(function (error) {
        // handle error
        console.log(error);
    });
    }

    newPembayaran();
    function newPembayaran(){
        document.getElementById('badge_pembayaran').innerHTML = '';

        axios.get("{{ route('new-pembayaran') }}")
        .then((response) => {
            let data = response.data;
            // console.log(response.data)

            if(data !== 0){
                document.querySelector('#badge_pembayaran').innerHTML = data
            }

        }).catch(function (error) {
        // handle error
        console.log(error);
    });
    }

</script>
</aside>


