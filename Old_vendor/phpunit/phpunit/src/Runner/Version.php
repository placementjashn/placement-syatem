<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner;

use function array_slice;
use function dirname;
use function explode;
use function implode;
use function str_contains;
use SebastianBergmann\Version as VersionId;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Version
{
    private static string $pharVersion = '';
    private static string $version     = '';

    /**
     * Returns the current version of PHPUnit.
     */
    public static function id(): string
    {
        if (self::$pharVersion !== '') {
            return self::$pharVersion;
        }

        if (self::$version === '') {
            self::$version = (new VersionId('10.0.14', dirname(__DIR__, 2)))->asString();
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
            self::$version = (new VersionId('10.0.12', dirname(__DIR__, 2)))->asString();
=======
            self::$version = (new VersionId('10.0.14', dirname(__DIR__, 2)))->asString();
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
>>>>>>> 81fc401745b988ca80ab15efab03fb1c940e6445
        }

        return self::$version;
    }

    public static function series(): string
    {
        if (str_contains(self::id(), '-')) {
            $version = explode('-', self::id(), 2)[0];
        } else {
            $version = self::id();
        }

        return implode('.', array_slice(explode('.', $version), 0, 2));
    }

    public static function getVersionString(): string
    {
        return 'PHPUnit ' . self::id() . ' by Sebastian Bergmann and contributors.';
    }
}
