Final Project Pengembangan Data Warehouse dan Dashboard Adventureworks
Dibuat oleh Kelompok 1
Program Studi Sistem Informasi
Fakultas Ilmu Komputer
UPN "Veteran" Jawa Timur
Nama Ketua :
Tasya Diva Fortuna Hadi (21082010088)
Nama Anggota :
Widya Pratiwi (21082010093)
Kharisma Agustya Z.S (21082010120)
====================================================================

Instruksi cara menginstal dan menjalankan aplikasi :
1. Download database server xampp versi 3.3.0 terlebih dahulu kemudian install
2. Download dan ekstrak file FP_DWO_KELOMPOK_1.zip 
3. Taruh folder FP_DWO_KELOMPOK_1 ke xampp\htdocs
4. Buka xampp, start mysql, tomcat, dan apache
5. Import database dwadventureworks.sql  dan AWBackup.sql
6. Taruh file mondrian ke xampp\tomcat\webapps\
7. Jalankan http://localhost:8080/mondrian pada browser untuk memeriksa tampilan yang berisikan link OLAP Purchasing dan OLAP Production.
8. Pindahkan file produksi.jsp, produksi.xml, purchasing.jsp, dan purchasing.xml ke \xampp\tomcat\webapps\mondrian\WEB-INF\queries.
9. Matikan dan nyalakan ulang tomcat di xampp.
10. Ketik pada address bar browser localhost/adventureworks/app/login.php untuk menjalankan dashboard.
11. Jika halaman sudah muncul maka bisa input username = admin dan password = admin untuk bisa mengakses halaman dashboard.

