
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('title')</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">@yield('title')</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                
           
                <div class="ms-md-auto  d-flex align-items-center">
                <div class="ms-md-auto align-items-justify">
                <ul class="navbar-nav navbar-nav-hover ms-auto justify-content-end">
                    <li class="ms-ms-auto nav-item d-flex align-items-center">
                        <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold px-0">
                            <i class="bi bi-person-fill me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                    </li>
                    <div >
                    @include('includes.backend.notifikasi')

                    </div>

                    <!-- <li class="nav-item dropdown notification-ui show">
							<a class="nav-link dropdown-toggle notification-ui_icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="bi bi-bell-fill"></i>
								<span class="unread-notification"></span>
							</a>
							<div class="dropdown-menu notification-ui_dd show" aria-labelledby="navbarDropdown">
								<div class="notification-ui_dd-header">
									<h3 class="text-center">Notification</h3>
								</div>
								<div class="notification-ui_dd-content">

									<a href="#!" class="notification-list notification-list--unread text-dark">
										<div class="notification-list_img">
											<img src="images/users/user1.jpg" alt="user">
										</div>
										<div class="notification-list_detail">
											<p><b id = "nama"></b> <br><span class="text-muted" id = "ket"></span></p>
											<p class="nt-link text-truncate">How to travel long way home from here.</p>
										</div>
										<p><small id = "waktu">10 mins ago</small></p>
									</a>
									
									
								</div>
								<div class="notification-ui_dd-footer">
                                    <div class="d-grid gap-2">
									<a href="#!" class="btn btn-success" type="button">View All</a>
                                    </div>
								</div>
							</div>
						</li> -->

                                    <!-- <a href="#!" class="notification-list text-dark"> -->
										<!-- <div class="notification-list_img">
											<img src="images/users/user3.jpg" alt="user">
										</div> -->
										<!-- <div class="notification-list_detail">
											<p><b>Brian Cumin</b> <br><span class="text-muted">reacted to your post</span></p>
											<p class="nt-link text-truncate">How to travel long way home from here.</p>
										</div>
										<p><small>1 day ago</small></p>
									</a> -->

                    <!-- <li class="nav-item px-3 d-flex align-items-center"> -->
                        <!-- <a href="javascript:;" id="bell_notif" class="nav-link text-body p-0">
                            <i class="bi bi-bell-fill"></i> 
                        </a> -->


                        <!-- <div class="dropdown"> -->
                        <!-- <button class="btn bg-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Primary
                        </button> -->

                        <!-- <a href="javascript:;"  class="nav-link text-body p-0 dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" >
                            <i class="bi bi-bell-fill"></i> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                        </ul>
                        </div>
                    </li> -->


                    
                </ul>
                </div>
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                                
            </div>
        </div>
        
       
    </nav>
   
    <!-- End Navbar -->

    <script>
        	$(document).ready(function(){
			$("#bell_notif").click(function(){
				// $(".dropdown").toggleClass("active");
                console.log('tes')
			})
		});

    //     newNotifikasi();
    // function newNotifikasi(){

    //     axios.get("{{ route('notifikasi') }}")
    //     .then((response) => {
    //         let data = response.data;
    //         console.log(response.data)

    //         if(data !== 0){
    //             document.querySelector('#nama').innerHTML = data
    //             // document.querySelector('#badge_pembayaran').innerHTML = data
    //         }

    //     }).catch(function (error) {
    //     // handle error
    //     console.log(error);
    // });
    // }
    </script>



