CurrencyDetector [![Build Status](https://travis-ci.org/mcuadros/currency-detector.png?branch=master)](https://travis-ci.org/mcuadros/currency-detector)
==============================

Class to detect the currency from any string, support +100 currencies.

Requirements
------------

* PHP 5.4.x

Installation
------------

The recommended way to install CurrencyDetector is [through composer](http://getcomposer.org).
You can see [the package information on Packagist.](https://packagist.org/packages/mcuadros/currency-detector)

```JSON
{
    "require": {
        "mcuadros/currency-detector": "dev-master"
    }
}
```


Usage
-----

### getCurrency
Returns a string with the most common currency.

```php
$detector = new Detector();
echo $detector->getCurrency('11.10$');
//Returns: USD
```

### getCurrencies
Returns all the currencies suitable for this string.

```php
$detector = new Detector();
echo $detector->getCurrencies('11.10$');
//Returns: ['USD', 'AUD', 'CAD', ...]
```

### getAmount
Return a money string as a float

```php
$detector = new Detector();
echo $detector->getAmount('11,10.00$');
//Returns: 1110.00
```

Tests
-----

Tests are in the `tests` folder.
To run them, you need PHPUnit.
Example:

    $ phpunit --configuration phpunit.xml.dist


License
-------

MIT, see [LICENSE](LICENSE)
