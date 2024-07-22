# Bibu - Aplikasi Jual Beli Ubi Celembu

Bibu adalah aplikasi e-commerce untuk menjual ubi Celembu, dibangun menggunakan framework Laravel untuk backend. Aplikasi ini menyediakan fitur lengkap untuk mengelola produk, pesanan, dan pengguna dengan antarmuka yang mudah digunakan.

## Daftar Isi

- [Instalasi](#instalasi)
- [Penggunaan](#penggunaan)
- [Fitur](#fitur)

## Instalasi

### Prasyarat

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)

### Setup Backend (Laravel)

1. Clone repository:

    ```bash
    git clone https://github.com/username/bibu.git
    cd bibu
    ```

2. Instal dependensi PHP:

    ```bash
    composer install
    ```

3. Salin file `.env.example` ke `.env` dan perbarui kredensial database:

    ```bash
    cp .env.example .env
    ```

4. Hasilkan application key:

    ```bash
    php artisan key:generate
    ```

5. Jalankan migrasi database:

    ```bash
    php artisan migrate
    ```

6. Mulai server development Laravel:

    ```bash
    php artisan serve
    ```

## Penggunaan

- Buka browser Anda dan navigasikan ke `http://localhost:8000` untuk mengakses aplikasi Bibu.

## Fitur

- **Manajemen Produk:** Menambah, mengedit, dan menghapus produk ubi Celembu.
- **Manajemen Pesanan:** Melihat, memproses, dan mengelola pesanan.
- **Autentikasi Pengguna:** Fungsi register, login, dan logout.
- **Pencarian Produk:** Mencari produk berdasarkan nama atau kategori.
- **Keranjang Belanja:** Menambah dan menghapus produk dari keranjang belanja.
- **Checkout:** Memproses pembayaran dan menyelesaikan pesanan.
- **Panel Admin:** Mengelola produk, kategori, pengguna, dan pesanan.

