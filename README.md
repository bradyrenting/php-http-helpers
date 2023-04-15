# HTTP Helpers for PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bradyrenting/php-http-helpers.svg?style=flat-square)](https://packagist.org/packages/bradyrenting/php-http-helpers)
[![Tests](https://img.shields.io/github/actions/workflow/status/bradyrenting/php-http-helpers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bradyrenting/php-http-helpers/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/bradyrenting/php-http-helpers.svg?style=flat-square)](https://packagist.org/packages/bradyrenting/php-http-helpers)

A set of constants that correspond to HTTP values, allowing you to easily set the appropriate status code for your HTTP responses for example, with IDE support for definitions.

This package was inspired by the [official Mozilla documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status).

## Installation

You can install the package via composer:

```bash
composer require bradyrenting/php-http-helpers
```

## Usage

| Constant                                    | Status code |
|---------------------------------------------|-------------|
| ``Status::CONTINUE``                        | 100         |
| ``Status::SWITCHING_PROTOCOLS``             | 101         |
| ``Status::PROCESSING``                      | 102         |
| ``Status::EARLY_HINTS``                     | 103         |
| ㅤ                                           |             |
| ``Status::OK``                              | 200         |
| ``Status::CREATED``                         | 201         |
| ``Status::ACCEPTED``                        | 202         |
| ``Status::NON_AUTHORITATIVE_INFORMATION``   | 203         |
| ``Status::NO_CONTENT``                      | 204         |
| ``Status::RESET_CONTENT``                   | 205         |
| ``Status::PARTIAL_CONTENT``                 | 206         |
| ``Status::MULTI_STATUS``                    | 207         |
| ``Status::ALREADY_REPORTED``                | 208         |
| ``Status::IM_USED``                         | 226         |
| ㅤ                                           |             |
| ``Status::MULTIPLE_CHOICES``                | 300         |
| ``Status::MOVED_PERMANENTLY``               | 301         |
| ``Status::FOUND``                           | 302         |
| ``Status::SEE_OTHER``                       | 303         |
| ``Status::NOT_MODIFIED``                    | 304         |
| ``Status::USE_PROXY``                       | 305         |
| ``Status::TEMPORARY_REDIRECT``              | 307         |
| ``Status::PERMANENT_REDIRECT``              | 308         |
| ㅤ                                           |             |
| ``Status::BAD_REQUEST``                     | 400         |
| ``Status::UNAUTHORIZED``                    | 401         |
| ``Status::PAYMENT_REQUIRED``                | 402         |
| ``Status::FORBIDDEN``                       | 403         |
| ``Status::NOT_FOUND``                       | 404         |
| ``Status::METHOD_NOT_ALLOWED``              | 405         |
| ``Status::NOT_ACCEPTABLE``                  | 406         |
| ``Status::PROXY_AUTHENTICATION_REQUIRED``   | 407         |
| ``Status::REQUEST_TIMEOUT``                 | 408         |
| ``Status::CONFLICT``                        | 409         |
| ``Status::GONE``                            | 410         |
| ``Status::LENGTH_REQUIRED``                 | 411         |
| ``Status::PRECONDITION_FAILED``             | 412         |
| ``Status::PAYLOAD_TOO_LARGE``               | 413         |
| ``Status::URI_TOO_LONG``                    | 414         |
| ``Status::UNSUPPORTED_MEDIA_TYPE``          | 415         |
| ``Status::RANGE_NOT_SATISFIABLE``           | 416         |
| ``Status::EXPECTATION_FAILED``              | 417         |
| ``Status::I_AM_A_TEAPOT``                   | 418         |
| ``Status::MISDIRECTED_REQUEST``             | 421         |
| ``Status::UNPROCESSABLE_ENTITY``            | 422         |
| ``Status::LOCKED``                          | 423         |
| ``Status::FAILED_DEPENDENCY``               | 424         |
| ``Status::TOO_EARLY``                       | 425         |
| ``Status::UPGRADE_REQUIRED``                | 426         |
| ``Status::PRECONDITION_REQUIRED``           | 428         |
| ``Status::TOO_MANY_REQUESTS``               | 429         |
| ``Status::REQUEST_HEADER_FIELDS_TOO_LARGE`` | 431         |
| ``Status::UNAVAILABLE_FOR_LEGAL_REASONS``   | 451         |
| ㅤ                                           |             |
| ``Status::INTERNAL_SERVER_ERROR``           | 500         |
| ``Status::NOT_IMPLEMENTED``                 | 501         |
| ``Status::BAD_GATEWAY``                     | 502         |
| ``Status::SERVICE_UNAVAILABLE``             | 503         |
| ``Status::GATEWAY_TIMEOUT``                 | 504         |
| ``Status::HTTP_VERSION_NOT_SUPPORTED``      | 505         |
| ``Status::VARIANT_ALSO_NEGOTIATES``         | 506         |
| ``Status::INSUFFICIENT_STORAGE``            | 507         |
| ``Status::LOOP_DETECTED``                   | 508         |
| ``Status::NOT_EXTENDED``                    | 510         |
| ``Status::NETWORK_AUTHENTICATION_REQUIRED`` | 511         |

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Brady Renting](https://github.com/bradyrenting)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
