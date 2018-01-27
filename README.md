# dashboard-tanara-statistic
Tanara's dashboard for statistic application

## Install :

```bash
$ composer require bantenprov/dashboard-tanara-statistic:dev-master
```

## Edit `config/app.php`

```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        //==

        Bantenprov\DashboardTanaraStatistic\DashboardTanaraStatisticServiceProvider::class,
```

## Publish vendor command :

```bash
$ php artisan vendor:publish --tag=dtstatistik-assets
```