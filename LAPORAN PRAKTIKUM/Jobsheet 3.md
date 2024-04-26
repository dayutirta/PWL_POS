# JOBSHEET 3

**Mochammad Zakaro Al Fajri/19/2F**

Jawablah pertanyaan berikut sesuai pemahaman materi di atas

1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?


    jawab :  APP_KEY digunakan untuk melakukan enksripsi data yang bersifat sensitif di laravel sehingga integritas data tetap terjaga. Contoh data sensitif tersebut seperti password, token autentikasi,dll. APP_KEY juga digunakan untuk menandatangani payoad dalam berbagai operasi di laravel seperti pengiriman email, pebuatan url yang ternenkripsi dan penjadwalan tugas


2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?

    Jawab : dengan menggunakan php artisan

3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?

    Jawab : Secara default, laravel memiliki 5 file migration. % file migration tersebut yaitu :

    a. create_users_table.php: digunakan untuk membuat tabel users yang mencakup kolom seperti nama, email, password, dan sebagainya.

    b. create_password_resets_table.php: digunakan untuk membuat tabel password resets yang menyimpan token reset password untuk pengguna yang lupa password.

    c. create_failed_jobs_table.php: digunakan membuat tabel untuk menyimpan jobs yang gagal

    d. create_sessions_table.php: digunakan untuk membuat table session yang menyimpan sesi pengguna. 

    e. create_migrations_table.php: digunakan untuk tabel tabel migrations itu sendiri. 

4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut?

    Jawab : Tujuan kode tersebut adalah untuk menambahkan dua kolom secara otomatis yaitu kolom created_at yang berisi pertama kali baris baru dimasukkan ke dalam tabel, dan updated_at yang akan diperbarui setiap baris baru sebelumnya mengalami perubahan

5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?

    Jawab : tipe data yang dihasilkan yaitu BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY.

6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?

    Jawab : perbedaan yang dihasilkan yaitu saat menggunakan $table->id(), maka secara otomatis akan membuat kolom primary key dengan nama id. Sedangkan saat menggunakan $table->id('level_id'), maka kolom primary key akan bernama level_id
    
7. Pada migration, Fungsi ->unique() digunakan untuk apa?

    Jawab : Fungsi ->unique()  digunakan untuk menetapkan indeks unik pada kolom  tertentu yang memastikan bahwa setiap nilai di kolom tersebut unik

8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?

    Jawab : Pada tabel m_user, kolom level_id menggunakan $table->unsignedBigInteger('level_id') yang menunjukkan bahwa kolom level_id dalam tabel m_user adalah sebuah kunci asing foreign key. Sedangkan Pada tabel m_level, penggunaan $table->id('level_id') menetapkan kolom level_id sebagai primary key tabel tersebut. 

9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode
program Hash::make('1234');?

    Jawab : Tujuan digunakannya class hash  yaitu untuk mengamankan data dengan menggunkaan meetode yang aman untuk menghasilkan hash dari data, terutama kata sandi. Selain itu, hash juga digunakan untuk melakukan verfifikasi data ,menggunakan metode check(). 

    Maksud dari kode program hash::make('1234') yaitu menggunakan Class Hash untuk mengenkripsi string "1234" yang hasilnya berupa hash string yang tidak terbaca, yang dapat disimpan dalam database atau digunakan untuk keperluan lain.

10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?

    Jawab : untuk mengamankan query dari serangan injeksi SQL dan  mempermudah pengiriman nilai variabel ke dalam query.

11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan protected $primaryKey = ‘user_id’; ?

    Jawab : Kode $table = ‘m_user’digunakan untuk menentukan tabel yang akan digunakan dan terhubung dalam model. $primaryKey = ‘user_id’; digunakan untuk menentukan primary key pada model yang sesuai dengan tabel terkait 

12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan

    Jawab : Menurut saya lebih mudah menggunakan DB Facade karena lebih flesibel, dan kompleksitas yang lebih rendah.