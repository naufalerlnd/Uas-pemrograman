# Uas-pemrograman
login.php

berisi form login dengan session start() untuk memulai sesi login

UAS.php

disisipkan fungsi validasi cek login, jika belum login tetapi langsung direct akses ke index.php, input.php, edit.php maka akses ditolak dan lalu muncul peringatan dilanjut dengan redirect ke login page otomatis
pada tabel data pasien covid terdapat pilihan Edit, Delete, Input, dan Logout
lanjut ke Tombol Input (input.php)

input.php

disipkan fungsi validasi cek login
berisi form yang dimana Nama, Alamat, Provinsi, Email, NoHp, Keahlian. tersimpan ke Database Relawan Table Covid
sedangkan Dropdown Provinsi berisi 34 provinsi di indonesia yang tersimpan dan diambil dari Database Relawan table provinsi yang selanjutnya disimpan ke table covid
ada tombol Add (sumbit) untuk menyimpan , dan Reset untuk menghapus semua inputan
jika Sudah di add maka otomatis teralihkan ke index.php atau tampilan data relawan
fungsi input.php tersimpan di proses.php

edit.php

disisipkan fungsi validasi cek login
berisi form yang dimana Nama, Alamat, Provinsi, Email, NoHp, Keahlian. yang diambil dan disimpan kembali ke Database Relawan Table Covid
sedangkan Dropdown Provinsi berisi 34 provinsi di indonesia yang tersimpan dan diambil dari Database Relawan table provinsi yang selanjutnya disimpan ke table covid
ada tombol Add (submit) untuk menyimpan
fungsi edit.php tersimpan di prosesedit.php

delete.php

disispkan fungsi validasi cek login
fungsi delete dari db berdasarkan ID yg kita pilih
