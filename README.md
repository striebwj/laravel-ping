# Laravel Ping Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/airranged/laravel-ping.svg?style=flat-square)](https://packagist.org/packages/airranged/laravel-ping)
[![Total Downloads](https://img.shields.io/packagist/dt/airranged/laravel-ping.svg?style=flat-square)](https://packagist.org/packages/airranged/laravel-ping)

A Laravel Package to ping a URL. Used internally to ensure uptime and notify our team when services go down (typically by notifying our Slack Channel).

## Installation

You can install the package via composer:

```bash
composer require airranged/laravel-ping
```

## Usage

Ping a URL and get the status code and response time back:

```php
use Airranged\PingPackage\Ping;

...

$ping = new Ping('http://httpbin.org/status/200');
echo "Response Code: " . $ping->getHttpStatus();
echo "<br>";
echo "Response was " . $ping->getTotalTime() . "ms";
```

### Advanced Usage

Ping a Password Protected URL and get the status code and response time back:

```php
use Airranged\PingPackage\Ping;

...

$ping = new Ping('http://httpbin.org/basic-auth/user/passwd');
$ping->useAuth('true');
$ping->setName('user');
$ping->setPass('passwd');
echo "Response Code: " . $ping->getHttpStatus();
echo "<br>";
echo "Response was " . $ping->getTotalTime() . "ms";
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email opensource@airranged.ca instead of using the issue tracker.

## Credits

- [Airranged](https://github.com/airranged)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
