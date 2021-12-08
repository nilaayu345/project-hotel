# Project Hotel

# How to install
   * `$ git clone https://github.com/agusprasetyo30/project_hotel.git`
   * `$ cd project_hotel` 
   * `$ composer install`, kalau tidak bisa cona `$ composer update`
   * copy `env.example` dan rubah menjadi `.env`, setelah itu konfigurasi database
   * `$ php artisan key:generate`
   * `$ php artisan migrate` untuk membuat **tabel**
   * `$ php artisan db:seed` untuk mengisi dummy data pada tabel
   * `$ php artisan serve` jalankan program

# Progress
   ### Minggu 1
   
   1. v0.0.1
      - Memasukan template ke file laravel
      - Konfigurasi dan desan tampilan login, Register, dan logout
      - Menambahkan controller `UserController`, `DashboardController`, `AdminController`, `CustomerController`
      - menghapus `Auth::routes()` dan membuat *custom route authentification* yang nantinya digunakan untuk mengatur manual route authentification/login
      - Menambahkan Library : 
        - `intervention/image` => untuk upload gambar/custom penyimpanan
        - `spatie/laravel-permission` => mengatur role/hak akses user
   
   ### Minggu 2
   2. v0.0.2
      - Menambahkan breadcrumb
      - Menambahkan menu <active>
      - Merubah isi dari template
   3. v0.0.3
      - Menyelesaikan Create, Update pada Pengguna View dan Controller
      - Menambahkan role `ADMIN` dan `CUSTOMER`
      - Menambahkan role di setiap role user untuk seeder
      - Menambahkan `Helpers/Helper.php` untuk helper data
         > Catatan
        - Menghapus `AdminController` & `CustomerController`
        - Nantinya untuk controller di sesuaikan sesuai fungsinya
        - Route untuk admin adalah `localhost:8000/admin/.....`