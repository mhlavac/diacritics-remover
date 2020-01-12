Diacritics Remover
==================

This package is abandoned, I suggest you use [symfony/string](https://packagist.org/packages/symfony/string) instead, it provides you with `AsciiSlugger` that provides similar functionality via `(new AsciiSlugger())->slug('Čokl běžel po džemu');`

[![Build Status](https://travis-ci.org/mhlavac/diacritics-remover.svg)](https://travis-ci.org/mhlavac/diacritics-remover)

removes diacritics from strings

## Example

``` php
$original = 'Čokl běžel po džemu'

$remover = new DiacriticsRemover()
$output = $remover->parse($original);

echo $output; // Cokl bezel po dzemu
```

## Installation

via composer: `composer require mhlavac/diacritics-remover`
