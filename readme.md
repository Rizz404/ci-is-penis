1. **Autoload**: Library `'form_validation'` dan helper `'url'` diatur untuk dimuat secara otomatis. Ini berarti tidak perlu memuatnya secara manual di setiap controller.

```php
$autoload['libraries'] = array('form_validation');
$autoload['helper'] = array('url');
```

2. **Config**: `'index.php'` telah dihapus dari `index_page`, dan `base_url` diatur sesuai dengan lokasi instalasi CodeIgniter.

```php
$config['index_page'] = '';
$config['base_url'] = 'http://localhost/stater_ci/';
```

3. **.htaccess**: Telah membuat file `.htaccess` dengan aturan rewrite untuk menghapus `'index.php'` dari URL.

```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```

4. **Routes**: Controller default diatur menjadi sesuai controller yang mau ditampilkan

contoh:

```php
$route['default_controller'] = 'main';
```

5. **Controller dan View**: Lalu lanjut membuat controller dan view.

6. **Passing Data**:
   Jika cuma satu maka

```php
$data['nama_data'] = $datanya

// contoh
$data['result'] = $result;
```

Cara mengirim data ke view dengan menggunakan array asosiatif jika data banyak

```php
$data = array ('key' => value);

// contoh
$data = array(
  'nama' => $nama,
  'type_kamar' => $type_kamar,
  'lama_inap' => $lama_inap,
  'harga_kamar' => $harga_kamar,
  'subtotal' => $subtotal,
  'diskon' => $diskon,
  'total' => $total,
  'ppn' => $ppn,
  'total_dibayar' => $total_dibayar,
  'not_found' => $not_found,
)
```

6. **Optional**: Untuk menambahkan gaya, telah membuat folder `assets` dan menyalin folder `bootstrap` yang berisi file CSS dan JS.
