<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

<ol>
    <li>Download projectnya</li>
    <li>Jalankan composer install</li>
    <li>Jalankan php artisan key:generate</li>
    <li>Jalankan php artisan migrate:fresh --seed</li>
    <li>Jalankan php artisan serve</li>
</ol>

## Akun Seeder
         [
          'name' => "Teknosop Admin",
          'email' => "admin@gmail.com",
          'password' => Hash::make("888888"),
          'akses' => "Admin Gudang"
        ],
        [
          'name' => "Teknosop SuperAdmin",
          'email' => "superadmin@gmail.com",
          'password' => Hash::make("888888"),
          'akses' => "Admin Utama"
        ],
        [
          'name' => "Teknosop Kasir",
          'email' => "kasir@gmail.com",
          'password' => Hash::make("888888"),
          'akses' => "Kasir"
        ]

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
