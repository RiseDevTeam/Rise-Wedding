<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template Invitation</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Birthstone+Bounce&family=Noto+Serif&display=swap"
        rel="stylesheet" />
</head>

<body>

    <?php
    setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');
    date_default_timezone_set('Asia/Jakarta');
    
    $server = 'localhost'; //nama host
    $user = 'root'; //nama user
    $password = ''; //password
    $database = 'db_wedding'; //nama database
    
    $koneksi = mysqli_connect($server, $user, $password, $database);
    
    // Koneksi gagal
    if (!$koneksi) {
        die('Gagal terhubung dengan database: ' . mysqli_connect_error());
    }
    $id_pemesanan = $hostingan->id_pemesanan;

    $pemesanan_invitation = mysqli_query($koneksi, "SELECT pemesanan_invitation.id_pemesanan,pemesanan_invitation.id_biodata_pelanggan, detail_pemesanan_invitation.file_template FROM  pemesanan_invitation 
    LEFT JOIN detail_pemesanan_invitation ON pemesanan_invitation.id_pemesanan = detail_pemesanan_invitation.id_pemesanan 
    WHERE pemesanan_invitation.id_pemesanan = $id_pemesanan ");
    $data_pemesanan = mysqli_fetch_assoc($pemesanan_invitation);

    $id_biodata_pelanggan = $data_pemesanan['id_biodata_pelanggan'];

    $sql = mysqli_query($koneksi, "SELECT * FROM  biodata_pelanggan master LEFT JOIN biodata_home_page homeP ON master.id_biodata_home_page = homeP.id_biodata_home_page LEFT JOIN biodata_kutipan_ayat ayat ON master.id_kutipan_ayat = ayat.id_kutipan_ayat 
    LEFT JOIN biodata_pasangan_pria pria ON master.id_pasangan_pria = pria.id_pasangan_pria 
    LEFT JOIN biodata_pasangan_wanita wanita ON master.id_pasangan_wanita = wanita.id_pasangan_wanita 
    LEFT JOIN biodata_galeri_foto galeri ON master.id_galeri_foto = galeri.id_galeri_foto 
    LEFT JOIN biodata_jadwal_akad akad ON master.id_jadwal_akad = akad.id_jadwal_akad 
    LEFT JOIN biodata_jadwal_resepsi resepsi ON master.id_jadwal_resepsi = resepsi.id_jadwal_resepsi 
    LEFT JOIN biodata_jadwal_resepsi_2 resepsi2 ON master.id_jadwal_resepsi_2 = resepsi2.id_jadwal_resepsi_2 
    LEFT JOIN biodata_musik musik ON master.id_musik = musik.id_musik 
    LEFT JOIN biodata_keluarga_besar_pria ON master.id_keluarga_besar_pria = biodata_keluarga_besar_pria.id_keluarga_besar_pria 
    LEFT JOIN biodata_keluarga_besar_wanita ON master.id_keluarga_besar_wanita = biodata_keluarga_besar_wanita.id_keluarga_besar_wanita 
    WHERE master.id_biodata_pelanggan = $id_biodata_pelanggan ");
    $data = mysqli_fetch_assoc($sql);
    
    $akad = $data['tanggal_akad'] . " " . $data['jam_mulai_akad'];
    $tgl = strtotime($data['tanggal_akad']);
   
    $file_invitation = mysqli_query($koneksi, "SELECT pemesanan_invitation.id_pemesanan,pemesanan_invitation.id_biodata_pelanggan, detail_pemesanan_invitation.file_template FROM  pemesanan_invitation 
    LEFT JOIN detail_pemesanan_invitation ON pemesanan_invitation.id_pemesanan = detail_pemesanan_invitation.id_pemesanan 
    WHERE pemesanan_invitation.id_pemesanan = $id_pemesanan ");

    while ($pemesanan = mysqli_fetch_array($file_invitation)) {
        // var_dump($pemesanan);
        include (public_path('file/file_template/'. $pemesanan['file_template']))
        
        ?>
    <?php
        }
       ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
