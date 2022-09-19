@if ($kategori == 'Basic')
    @include('frontend.template_invitation.form_pemesanan.form_gambar_basic')
@endif
@if ($kategori == 'Premium')
    @include('frontend.template_invitation.form_pemesanan.form_gambar_premium')
@endif
