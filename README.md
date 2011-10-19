Faker — A fake text generator
=============================

Generates ludicrous randomized text for functional testing, fuzz testing, or lorem ipsum-esque purposes.

This is more or less a direct PHP port of the Ruby Faker gem, which is more or less a direct port of the Perl Data::Faker from CPAN. Actually, it does a little more than that, because I’m obsessive compulsive and possibly a little bit mad.

Requirements
------------

- PHP 5.2+
- PEAR (optional)

Overview
--------

Command Line Usage:

```
$ faker person.name
$ faker internet.email
$ faker color.hex
$ faker product.sku
```

Using the library directly:

```
require_once 'Faker.php';
$fake = new Faker();

echo $fake->Person->name();
echo $fake->Internet->email();
echo $fake->Color->hex();
echo $fake->Product->sku();
```



