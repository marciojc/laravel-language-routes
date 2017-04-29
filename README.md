# Language Routes

Website & Documentation: https://github.com/marciojc/language-routes

<hr>

After creating your new Laravel application you can include the LanguageRoutes package with the following command:

```bash
composer require marciojc/language-routes
```

Add the LanguageRoutes service provider to the `config/app.php` file in the `providers` array:

```php
'providers' => [
    // Laravel Framework Service Providers...
    //...

    // Package Service Providers
    marciojc\LanguageRoutes\LanguageRoutesServiceProvider::class,
    // ...

    // Application Service Providers
    // ...
],
```

