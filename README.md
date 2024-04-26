# Jobsheet 5: Blade View, Web Templating, Datatables
> Nama  : Muhammad Fakhruddin Arif
>
> Kelas : TI-2F
>
> Nomor : 21

## Tugas Praktikum
1. Tambahkan button Add di halam manage kategori, yang mengarah ke create kategori baru

<img src="./public/screenshots/J5_Tugas1.png">

2. Tambahkan menu untuk halaman manage kategori, di daftar menu navbar

<img src="./public/screenshots/J5_Tugas2.png">

3. Tambahkan action edit di datatables dan buat halaman edit serta controllernya

Form Edit:
<img src="./public/screenshots/J5_Tugas3_1.png">

Hasil Edit:
<img src="./public/screenshots/J5_Tugas3_2.png">

4. Tambahkan action delete di datatables serta controllernya

Data Awal:
<img src="./public/screenshots/J5_Tugas4_1.png">

Hasil:
<img src="./public/screenshots/J5_Tugas4_2.png">

[//]: # (# Jobsheet 4: Model dan Eloquent Orm)
[//]: # (## Praktikum 1 - $fillable)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum1-01.png">)

[//]: # (Yang terjadi yaitu penambahan data berhasil karena value pada fillable dipenuhi)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum1-02.png">)

[//]: # (Yang terjadi yaitu error pada url tersebut dikarenakan key password tidak ada pada fillable)

[//]: # ()
[//]: # (## Praktikum 2.1 - Retrieving Single Models)

[//]: # (<img src="./public/screenshots/Praktikum2-01.png">)

[//]: # (Data yang muncul yaitu hanya user dengan id 1)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum2-02.png">)

[//]: # (Data yang dihasilkan sama tetapi hanya beda pada penulisan eloquent orm saja)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum2-03.png">)

[//]: # (Data yang dihasilkan sama seperti sebelumnya berbeda pada penulisan source code saja)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum2-04.png">)

[//]: # (Data yang dihasilkan hanya username dan nama pada user id 1)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum2-05.png">)

[//]: # (Hasildari ini yaitu not found 404 dikarenakan data tidak lebih dari 20)

[//]: # ()
[//]: # (## Praktikum 2.2 - Not Found Exceptions)

[//]: # (<img src="./public/screenshots/Praktikum2-06.png">)

[//]: # (Hasil dari source tersebut yaitu sama hanya berbeda pada syntax saja)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum2-07.png">)

[//]: # (Hasilnya yaitu 404 dikarenakan data dengan username "manager9" tidak ada dalam database)

[//]: # ()
[//]: # (## Praktikum 2.3 - Retrieving Aggregrates)

[//]: # (<img src="./public/screenshots/Praktikum2-09.png">)

[//]: # (Hasil yang dihasilkan yaitu angka 2 yaitu hasil dari count tersebut dan tidak menampilkan page)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum2-08.png">)

[//]: # ()
[//]: # (## Praktikum 2.4 - Retreiving or Creating Models)

[//]: # (<img src="./public/screenshots/Praktikum2-10.png">)

[//]: # (Jika terdapat data maka tidak akan membuat data tersebut)

[//]: # (<img src="./public/screenshots/Praktikum2-11.png">)

[//]: # (Kemudian ini hasil ketika data tersebut tidak ada)

[//]: # (<img src="./public/screenshots/Praktikum2-12.png">)

[//]: # (Ketika tidak ada data maka akan membuat objek baru tetapi tidak disimpan ke database)

[//]: # (<img src="./public/screenshots/Praktikum2-13.png">)

[//]: # (Dan ini hasilnya ketika disave)

[//]: # ()
[//]: # (## Praktikum 2.5 - Attribute Changes)

[//]: # (<img src="./public/screenshots/Praktikum2-14.png">)

[//]: # (Nilai null dikarenakan data telah tidak ada yang dirubah jadi bernilai false)

[//]: # ()
[//]: # (<img src="./public/screenshots/Praktikum2-15.png">)

[//]: # (Bernilai true dikarenakan terdapat username yang telah dirubah meskipun telah disimpan ke database perbaruannya)

[//]: # ()
[//]: # (## Praktikum 2.6 - CRUD)

[//]: # (Pada section ini terdapat sebuah button nantinya akan dapat menambahkan data dan ada tautan untuk update dan delete data)

[//]: # ()
[//]: # (## Praktikum 2.7 - Relationships)

[//]: # (<img src="./public/screenshots/Praktikum2-18.png">)

[//]: # (Pada langkah ini akan ditampilkan hubungan one to one antara UserModel dengan Model Level menggunakan dd&#40;dump and die&#41;. Terdapat 11 item yang menunjukkan hubungan kedua model.)

[//]: # (# Jobsheet 3: Migration, Seeder, DB Facade, Query Builder, dan Eloquent ORM)

[//]: # (1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?)

[//]: # (>`APP_KEY` pada file `.env` adalah kunci enkripsi digunakan untuk menjaga keamanan data sensitif dalam app)

[//]: # (2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?)

[//]: # (```php)

[//]: # (php artisan key:generate)

[//]: # (```)

[//]: # (3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi?)

[//]: # (   dan untuk apa saja file migrasi tersebut?)

[//]: # (> Membuat tabel reset, menyimpan data user, menyimpan data failed job yang terjadi pada aplikasi, dan untuk menyimpan data token personal access)

[//]: # (4. Secara default, file migrasi terdapat kode $table->timestamps&#40;&#41;;, apa tujuan/output)

[//]: # (   dari fungsi tersebut?)

[//]: # (> Otomatis menambahkan kolom `created_at` dan `updated_at`)

[//]: # (5. Pada File Migrasi, terdapat fungsi $table->id&#40;&#41;; Tipe data apa yang dihasilkan dari)

[//]: # (   fungsi tersebut?)

[//]: # (> unsignedBigInteger)

[//]: # (6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id&#40;&#41;;)

[//]: # (   dengan menggunakan $table->id&#40;'level_id'&#41;; ?)

[//]: # (> Perbedaan antara `$table->id&#40;&#41;;` dan `$table->id&#40;'level_id'&#41;;` dalam hasil migrasi pada tabel m_level adalah penamaan kolom primary key yang dihasilkan. Hasil jika tanpa params adalah `id` sedangkan hasil `$table->id&#40;'level_id'&#41;;` adalah `level_id`.)

[//]: # (7. Pada migration, Fungsi ->unique&#40;&#41; digunakan untuk apa?)

[//]: # (> Fungsi `->unique&#40;&#41;` pada migration digunakan untuk menetapkan kolom sebagai unik, yang berarti nilainya harus unik di antara setiap baris dalam tabel, mencegah duplikasi data pada kolom tersebut.)

[//]: # (8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user)

[//]: # (   menggunakan $tabel->unsignedBigInteger&#40;'level_id'&#41;, sedangkan kolom level_id)

[//]: # (   pada tabel m_level menggunakan $tabel->id&#40;'level_id'&#41; ?)

[//]: # (> Kolom level_id pada tabel m_user menggunakan `$table->unsignedBigInteger&#40;'level_id'&#41;` karena kolom ini berperan sebagai foreign key yang merujuk ke kolom id pada tabel `m_level`, yang secara default bertipe unsigned big integer. Sedangkan kolom level_id pada tabel m_level menggunakan `$table->id&#40;'level_id'&#41; `sebagai primary key.)

[//]: # (9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode)

[//]: # (   program Hash::make&#40;'1234'&#41;;?)

[//]: # (> Class Hash digunakan untuk mengenkripsi data yang akan disimpan ke dalam database. Biasanya digunakan untuk mengenkripsi password.)

[//]: # (10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya &#40;?&#41;, apa)

[//]: # (    kegunaan dari tanda tanya &#40;?&#41; tersebut?)

[//]: # (> Tanda tanya `&#40;?&#41;` pada query builder berperan sebagai placeholder untuk parameter yang akan diikuti saat query dieksekusi.)

[//]: # (11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table =)

[//]: # (    ‘m_user’; dan protected $primaryKey = ‘user_id’; ?)

[//]: # (> Penulisan protected `$table = 'm_user';` menunjukkan bahwa model terkait dengan tabel '`m_user'`, sementara protected `$primaryKey = 'user_id';` menetapkan bahwa `'user_id'` adalah primary key pada tabel tersebut.)

[//]: # (12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke)

[//]: # (    database &#40;DB Façade / Query Builder / Eloquent ORM&#41; ? jelaskan )

[//]: # (> Lebih mudah dengan menggunakan Eloquent ORM karena sesuai dengan konsep MVC yang membuat kode lebih mudah untuk dikelola dan dibaca)
