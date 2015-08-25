Diacritics Remover
==================

[![Build Status](https://travis-ci.org/mhlavac/DiacriticsRemover.svg)](https://travis-ci.org/mhlavac/DiacriticsRemover)

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
