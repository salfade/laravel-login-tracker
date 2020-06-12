# A simple package to track login attempts

[![Latest Version on Packagist](https://img.shields.io/packagist/v/salfade/laravel-login-tracker.svg?style=flat-square)](https://packagist.org/packages/salfade/laravel-login-tracker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/salfade/laravel-login-tracker/run-tests?label=tests)](https://github.com/salfade/laravel-login-tracker/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/salfade/laravel-login-tracker.svg?style=flat-square)](https://packagist.org/packages/salfade/laravel-login-tracker)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us
[Buy us Coffee?](http://paypal.me/MohamedFawzan)


## Installation
```bash
composer require salfade/laravel-login-tracker
```

Publish and run the migrations with:
```bash
php artisan vendor:publish --provider="Salfade\LoginTracker\LoginTrackerServiceProvider" --tag="migrations"
php artisan migrate
```
Next, add the `Salfade\LoginTracker\Traits\HasLoginAttempts` trait to your `User` Model. 
```php
    use Salfade\LoginTracker\Traits\HasLoginAttempts;
```

## Usage
Retrieving the latest successful login attempt
``` php
$userLastSuccessfulLogin = User::find($id)->latestLoginAttempt();
```

Retrieving all the successful login attempts
``` php
$userLastSuccessfulLogin = User::find($id)->loginAttempts();
echo $userLastSuccessfulLogin->is_address;
echo $userLastSuccessfulLogin->created_at;
```


## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email admin@salfade.com instead of using the issue tracker.

## Credits

- [Mohamed Fawzan](https://github.com/fawzanm)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
