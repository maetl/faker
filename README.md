Faker — A Fake Text Generator
=============================

This is more or less a direct PHP port of the Ruby Faker gem, which is more or less a direct port of the Perl Data::Faker from Cpan. Use it to generate ludicrous randomized text for functional testing, fuzz testing, or lorem ipsum-esque purposes.

Requirements
------------

- PHP 5.2+
- PEAR (apparently not at this stage)

Overview
--------

Usage:

```
require_once 'Faker.php';
$fake = new Faker();

echo $fake->Person->name();
echo $fake->Internet->email();
echo $fake->Color->hex();
echo $fake->Product->sku();
```



