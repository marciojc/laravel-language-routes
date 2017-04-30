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

Define the available languages at `config/app.php` file below 'locale' like:

```php
'locales' => ['en', 'pt'],
```

After that you need to create the route files for each language available, for en at `resources/lang/en/routes.php`, like

```php
return [
  'home'                  => '/en/',
  'news'                  => '/en/news',
];
```

and

```php
return [
  'home'                  => '/',
  'news'                  => '/noticias',
];
```

