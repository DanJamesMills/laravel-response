# Laravel Response

[![Latest Version on Packagist](https://img.shields.io/packagist/v/danjamesmills/laravel-response.svg?style=flat-square)](https://packagist.org/packages/danjamesmills/laravel-response)
[![Total Downloads](https://img.shields.io/packagist/dt/danjamesmills/laravel-response.svg?style=flat-square)](https://packagist.org/packages/danjamesmills/laravel-response)
![GitHub Actions](https://github.com/danjamesmills/laravel-response/actions/workflows/main.yml/badge.svg)

Introducing the Simple API Response Package for Laravel - a lightweight package that allows you to easily extend the functionality of your API's BaseController. This package provides simple helper methods for returning response codes and data. The methods include "sendResponse", "sendError" and "sendSuccess" which helps to return JSON responses with appropriate status codes and messages. With this package, you can streamline your API's response handling and ensure consistency throughout your application. This package is easy to use, and it can help you to keep your code clean and well-organized. The package is built with flexibility in mind, and it can easily adapt to your application's specific needs.

## Installation

You can install the package via composer:

```bash
composer require danjamesmills/laravel-response
```

## Usage

```php
<?php

namespace App\Http\Controllers\Api;

use DanJamesMills\LaravelResponse\Http\Controllers\BaseController;

class PostAPIController extends AppBaseController
{
    public function store(PollAPIRequest $request)
    {
        return $this->sendResponse($poll->toArray(), 'Poll saved successfully');
    }
    
    public function destroy($id)
    {
        return $this->sendSuccess('Poll deleted successfully');
    }
}
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email daniel620@hotmail.co.uk instead of using the issue tracker.

## Credits

-   [Daniel Mills](https://github.com/danjamesmills)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
