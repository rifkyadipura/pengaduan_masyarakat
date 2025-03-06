# Pengaduan Masyarakat

Proyek ini adalah aplikasi pengaduan masyarakat berbasis **PHP Native** yang berjalan di **localhost**.

## 📌 Persyaratan
- XAMPP atau WAMP (Web Server)
- PHP 7.0 atau lebih baru
- MySQL Database

---

## 🚀 Cara Menjalankan Proyek
### 1. Clone Repository
Buka Terminal atau Command Prompt, lalu jalankan perintah berikut:
```bash
git clone https://github.com/rifkyadipura/pengaduan_masyarakat.git
```
Pindahkan folder hasil clone ke dalam direktori:
- XAMPP: `C:\xampp\htdocs\`
- WAMP: `C:\wamp64\www\`

---

### 2. Membuat Database
1. Jalankan XAMPP/WAMP dan aktifkan **Apache** & **MySQL**.
2. Buka browser dan akses:
   ```
   http://localhost/phpmyadmin/
   ```
3. Buat database baru dengan nama:
   ```
   pengaduan_masyarakat_rifky
   ```
4. Import file SQL yang terdapat di folder:
   ```
   database/pengaduan_masyarakat_rifky.sql
   ```

---

### 3. Konfigurasi Database
Pastikan file konfigurasi koneksi database ada di:
```
koneksi_rifky.php
```
Kode koneksi database:
```php
<?php
    $dbConn = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat_rifky");
    if (!$dbConn) {
        die("Terjadi Kesalahan di Koneksi!");
    }
?>
```

---

### 4. Menjalankan Aplikasi
Akses aplikasi melalui browser:
```
http://localhost/pengaduan_masyarakat/
```

---

## ⚠️ Catatan
- Jika ada error, pastikan semua service Apache & MySQL sedang berjalan.
- Gunakan PHP versi 7.x untuk kompatibilitas.

---

### 📧 Kontak
Dibuat oleh: **Rifky Najra Adipura**  
GitHub: [rifkyadipura](https://github.com/rifkyadipura)  
Email: rifkyadipura@gmail.com

