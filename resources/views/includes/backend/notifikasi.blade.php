
@php
use App\Models\PembayaranInvitation;
use App\Models\PemesananInvitation;
use App\Models\User;

        $now = date('Y-m-d');
        // $psn = date('Y-m-d',strtotime('-1 days',strtotime($now)));
        $psn_kemaren = PemesananInvitation::where('tanggal_pemesanan','<',$now)->count();
        $psn_hariini = PemesananInvitation::where('tanggal_pemesanan',$now)->count();
        $pbr_kemaren = PembayaranInvitation::where('tanggal_pembayaran','<',$now)->count();
        $pbr_hariini = PembayaranInvitation::where('tanggal_pembayaran',$now)->count();   
        $user_kemaren = User::where('created_at','<',$now)->count();
        $user_hariini = User::where('created_at',$now)->count(); 
        
        $psn = PemesananInvitation::where('status','pending')
            ->orderBy('tanggal_pemesanan','ASC')->first();
    
            $byr = PembayaranInvitation::where('status','pending')
            ->orderBy('tanggal_pembayaran','ASC')->first();
        // return($data);
 
            
            $data = User::orderBy('created_at','ASC')->first();

@endphp

                       <li class="nav-item dropdown notification-ui show">
							<a class="nav-link dropdown-toggle notification-ui_icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="unread-notification"></span>
							</a>
							<div class="dropdown-menu notification-ui_dd show" aria-labelledby="navbarDropdown">
								<div class="notification-ui_dd-header">
									<h3 class="text-center">Notification</h3>
								</div>
								<div class="notification-ui_dd-content">
                                    @if(isset($data))
                                    <!-- {{$psn}} -->
									<a href="#!" class="notification-list notification-list--unread text-dark">
										<!-- <div class="notification-list_img">
											<img src="images/users/user1.jpg" alt="user">
										</div> -->
										<div class="notification-list_detail">
											<p><b>Pemesanan</b> <br><span class="text-muted">{{$psn->link_hosting}}</span></p>
											<p class="nt-link text-truncate">{{$psn->email}}.</p>
										</div>
										<p><small>{{$psn->tanggal_pemesanan}}</small></p>
									</a>
                                    @endif
                                    @if(isset($data))
                                    <!-- {{$psn}} -->
									<a href="#!" class="notification-list text-dark">
										<!-- <div class="notification-list_img">
											<img src="images/users/user1.jpg" alt="user">
										</div> -->
										<div class="notification-list_detail">
											<p><b>Pembayaran</b> <br><span class="text-muted"> Cek Pembayaran</span></p>
											<p class="nt-link text-truncate">{{$byr->status}}</p>
										</div>
										<p><small>{{$byr->tanggal_pembayaran}}</small></p>
									</a>
                                    @endif
								</div>
								<div class="notification-ui_dd-footer">
                                    <div class="d-grid gap-2">
									    <a href="#!" class="btn btn-success" type="button">View All</a>
                                    </div>
									<!-- <a href="#!" class="btn btn-success btn-block">View All</a> -->
								</div>
							</div>
						</li>