Translation Component
=====================

The Translation component provides tools to internationalize your application.

Getting Started
---------------

```
$ composer require symfony/translation
```

```php
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$translator = new Translator('fr_FR');
$translator->addLoader('array', new ArrayLoader());
$translator->addResource('array', [
    'Hello World!' => 'Bonjour !',
], 'fr_FR');

echo $translator->trans('Hello World!'); // outputs « Bonjour ! »
```

Sponsor
-------

The Translation component for Symfony 6.2 is [backed][1] by:
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
The Translation component for Symfony 6.1 is [backed][1] by:
=======
The Translation component for Symfony 6.2 is [backed][1] by:
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
>>>>>>> 81fc401745b988ca80ab15efab03fb1c940e6445

 * [Crowdin][2], a cloud-based localization management software helping teams to go global and stay agile.

Help Symfony by [sponsoring][3] its development!

Resources
---------

 * [Documentation](https://symfony.com/doc/current/translation.html)
 * [Contributing](https://symfony.com/doc/current/contributing/index.html)
 * [Report issues](https://github.com/symfony/symfony/issues) and
   [send Pull Requests](https://github.com/symfony/symfony/pulls)
   in the [main Symfony repository](https://github.com/symfony/symfony)

[1]: https://symfony.com/backers
[2]: https://crowdin.com
[3]: https://symfony.com/sponsor
