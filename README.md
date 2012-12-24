#universite

Reengineering university data about students, matters, and marks.

-------------

###Persiapan

1. Download github client sesuai dengan sistem operasi anda. github for windows (<http://windows.github.com>) or github for mac (<http://mac.github.com>).
2. Kalau github client tersebut sudah terinstal, pastikan anda telah mempunyai akun github. Lakukanlah login di kedua pihak, web dan github client.
3. Lakukan `fork` pada repository universite ini `ariflogic/universite`. Dan anda akan mendapatkan copy dari project ini di repository anda `[anda]/universite`. 
4. Tekan fitur `Clone in <Mac/Windows>`. Anda akan diarahkan ke github client yang anda install. Jika anda menggunakan **github for windows**, pastikan settingan path mengarah ke **/htdocs** atau ke public directory web server anda. Settingan ini dapat diatur pada menu **setting** global. Jika anda menggunakan **github for mac**, Ketika anda clone, anda akan diminta untuk mendeskripsikan direktori tujuan dari clone dan anda dapat mengarahkannya ke htdocs/ tanpa membuat folder baru di htdocs.
5. Dan anda siap mengerjakan copy repo dari project ini.

###Konfigurasi Framework
1. Konfigurasi penting saat melakukan clone adalah konfigurasi database. Edit file `Application/config/database.php` dan sesuaikan username, password dan nama database dengan konfigurasi database server anda.
2. Konfigurasi base_url. Edit file `Application/config/config.php` dan sesuaikan base_url dengan lokasi project ini anda tempatkan di web server anda. contoh : `http://localhost/universite/` 

###Database database
Informasi database dari aplikasi ini akan dikirimkan ke group dan email terkait. 