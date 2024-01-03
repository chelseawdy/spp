<?php 

if(empty($_GET['p'])){
    $title="Sistem Informasi Biaya Pendidikan";
    $konten="Konten/home.php";
}
else if($_GET['p']=='periode'){
    $title="Data Periode Pendidikan";
    $konten="Konten/periode.php";
}
else if($_GET['p']=='biaya'){
    $title="Data Biaya Pendidikan";
    $konten="Konten/biaya.php";
}
else if($_GET['p']=='siswa'){
    $title="Data Siswa Pendidikan";
    $konten="Konten/siswa.php";
}
else if($_GET['p']=='user'){
    $title="Data User Pendidikan";
    $konten="Konten/user.php";
}
else if($_GET['p']=='periode'){
    $title="Data Periode Pendidikan";
    $konten="Konten/periode.php";
}

// menu untuk transaksi
else if($_GET['p']=='tagihan'){
    $title="Data Tagihan Pendidikan";
    $konten="Konten/tagihan.php";
}

else if($_GET['p']=='tagihan-info'){
    $title="Informasi Riwayat Transaksi Tagihan";
    $konten="Konten/tagihan-info.php";
}

else if($_GET['p']=='tagihan-info-siswa'){
    $title="Informasi Riwayat Transaksi Tagihan";
    $konten="Konten/tagihan-info-siswa.php";
}

else if($_GET['p']=='tagihan-edit'){
    $title="Ubah Data Tagihan";
    $konten="Konten/tagihan-edit.php";
}

else if($_GET['p']=='bayar'){
    $title="Data Pembayaran Pendidikan";
    $konten="Konten/bayar.php";
}
else if($_GET['p']=='bayar-tambah'){
    $title="Input Pembayaran Siswa";
    $konten="Konten/bayar-tambah.php";
}
else if($_GET['p']=='bayar-konfirmasi'){
    $title="Konfirmasi Pembayaran Siswa";
    $konten="Konten/bayar-konfirmasi.php";
}
else if($_GET['p']=='bayar-alokasi'){
    $title="Alokasi Pembayaran Siswa";
    $konten="Konten/bayar-alokasi.php";
}


else if($_GET['p']=='laporan'){
    $title="Laporan Sistem";
    $konten="Konten/laporan.php";
}
// akhir menu transaksi
else if($_GET['p']=='backup'){
    $title="Riwayat Pembayaran Siswa";
    $konten="Konten/backup.php";
}

else if($_GET['p']=='restore'){
    $title="Restore Sistem";
    $konten="Konten/restore.php";
}

// Menu Untuk Siswa
else if($_GET['p']=='input-bayar'){
    $title="Input Lapor bayar";
    $konten="Konten/siswa-input-bayar.php";
}

else if($_GET['p']=='riwayat'){
    $title="Riwayat Pembayaran Siswa";
    $konten="Konten/siswa-riwayat.php";
}

else if($_GET['p']=='siswa-info'){
    $title="info Siswa";
    $konten="Konten/siswa-info.php";
}

else if($_GET['p']=='bayar-alokasi-siswa'){
    $title="Alokasi Pembayaran Siswa";
    $konten="Konten/bayar-alokasi-siswa.php";
}

else if($_GET['p']=='siswa-laporan'){
    $title="Laporan Siswa";
    $konten="Konten/siswa-laporan.php";
}


// 
else{
    $title="HaLaman Tidak Ditemukan";
    $konten="Konten/404.php";
}

