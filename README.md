# EU

Tiny lib for checking if a country is an EU member, and get the "normal" vat rate for that country.

## Installation

To add this package as a local, per-project dependency to your project, simply add a dependency on
 `moccalotto/crypto` to your project's `composer.json` file like so:

Run this command in the shell: `composer require moccalotto/eu`


## Demo

```php
<?php

use Moccalotto\Eu\CountryInfo;

require 'vendor/autoload.php';

$info = new CountryInfo();

var_dump($info->isEuCountry('DK'); // true

var_dump($info->vatRate('DK'); // 25
```
