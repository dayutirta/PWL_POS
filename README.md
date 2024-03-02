# Laporan Projek PWL_POS
## Praktikum
1. Proses mengupdate data dalam tabel level<p>
![alt text](image.png)<p>
![alt text](image-2.png)<p>
![alt text](image-1.png)<p>
2. Proses menambahkan data dalam tabel kategori<p>
![alt text](image-3.png)<p>
![alt text](image-4.png)<p>
3. Proses mengupdate data dalam tabel kategori<p>
![alt text](image-5.png)<p>
![alt text](image-6.png)<p>
4. Proses menambahkan data dalam tabel user<p>
![alt text](image-8.png)<p>
![alt text](image-9.png)<p>
5. Proses mengupdate data dalam tabel user<p>
![alt text](image-10.png)<p>
![alt text](image-11.png)<p>

## Soal

Jawablah pertanyaan berikut sesuai pemahaman materi di atas <p>
1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel? <p>
> **Jawab**<p>
APP_KEY berfungsi sebagai kunci yang digunakan untuk mengamankan dan mengenkripsi data dalam aplikasi Laravel.

2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY? <p>
>**Jawab**<p>
Dengan menjalankan perintah "php artisan key:generate" pada terminal.

3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut? <p>
>**Jawab**<p>
 "create_users_table.php" Digunakan untuk membuat tabel <p>
 "create_password_resets_table.php" Digunakan untuk reset kata sandi.

4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut? <p>
>**Jawab**<p>
Menambahkan kolom created_at dan updated_at yang secara otomatis menyimpan tanggal dan waktu saat record/data dibuat atau diperbarui.

5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut? <p>
>**Jawab**<p>
Fungsi $table->id() menghasilkan kolom big integer sebagai primary key yang dapat auto-increment.

6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ? <p>
>**Jawab**<p>
$table->id('level_id') memberikan nama tabel 'level_id'<p>
$table->id() menggunakan nama default 'id'.

7. Pada migration, Fungsi ->unique() digunakan untuk apa? <p>
>**Jawab**<p>
Unique() digunakan untuk memastikan nilai pada kolom bersifat unik dan tidak ada duplikasi data.

8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ? <p>
>**Jawab**<p>
UnsignedBigInteger('level_id') digunakan sebagai foreign key, sementara pada m_level, $table->id('level_id') memberikan nama tabel 'level_id'.

9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');? <p>
>**Jawab**<p>
Hash digunakan untuk hashing dan enkripsi.

10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut? <p>
>**Jawab**<p>
Sebagai tanda untuk menyisipkan nilai parameter ke dalam query SQL. Mencegah SQL injection dan memberikan nilai aman ke dalam query.

11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan protected $primaryKey = ‘user_id’; ?  <p>
>**Jawab**<p>
"protected $table = 'm_user';" dan "protected $primaryKey = 'user_id';" digunakan untuk menghubungkan model dengan tabel dan kunci utama tertentu.

12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan<p>
>**Jawab**<p>
Eloquent ORM, lebih ekspresif dan mudah dipahami, memungkinkan  untuk berinteraksi dengan database menggunakan model dan objek.

----------------------------
Terima Kasih<p>
Muhammad Dayutirta Mahara | TI-2F | 2241720210 | Politeknik Negeri Malang<p>
_______________
