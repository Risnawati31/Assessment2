# Laravel 6 Penjadwalan

Ini adalah simple sistem untuk menjadwalkan bimbingan antara dosen dan mahasiswa. Jadwal diinputkan bukan oleh mahasiswa ataupun dosen tapi oleh satu orang. Dilengkapi user management dimana terdapat dua type user yaitu admin dan user (orang yang menginputkan jadwal). 

Di sistem ini data Mahasiswa disimpan di tabel Client, data Dosen disimpan di tabel Employee.
Tabel service berisi jenis bimbingannya.
Table appointment berisi jadwal.

- [CoreUI Free theme](https://coreui.io/demo/#main.html) (Bootstrap 4)
- [FullCalendar library](https://fullcalendar.io/) (version 3)
- Datatable

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__
- Akses sistem dari browser
- You can login to adminpanel with default credentials __admin@admin.com__ - __password__
- You can login to adminpanel with default credentials __user@user.com__ - __password__

## License

Basically, bebas digunakan, dimodifikasi dan disebarkan.

---
