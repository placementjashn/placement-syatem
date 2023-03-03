<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Test;

use function sprintf;
use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class AssertionSucceeded implements Event
{
    private readonly Telemetry\Info $telemetryInfo;
<<<<<<< HEAD
    private readonly string $value;
=======
<<<<<<< HEAD
=======
    private readonly string $value;
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
    private readonly string $constraint;
    private readonly int $count;
    private readonly string $message;

    public function __construct(Telemetry\Info $telemetryInfo, string $value, string $constraint, int $count, string $message)
    {
        $this->telemetryInfo = $telemetryInfo;
<<<<<<< HEAD
        $this->value         = $value;
=======
<<<<<<< HEAD
=======
        $this->value         = $value;
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
        $this->constraint    = $constraint;
        $this->count         = $count;
        $this->message       = $message;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }

<<<<<<< HEAD
    public function value(): string
    {
        return $this->value;
=======
<<<<<<< HEAD
    /**
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5183
     */
    public function value(): string
    {
        return '';
=======
    public function value(): string
    {
        return $this->value;
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
    }

    public function count(): int
    {
        return $this->count;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function asString(): string
    {
        $message = '';

        if (!empty($this->message)) {
            $message = sprintf(
                ', Message: %s',
                $this->message
            );
        }

        return sprintf(
<<<<<<< HEAD
            'Assertion Succeeded (Constraint: %s, Value: %s%s)',
            $this->constraint,
            $this->value,
=======
<<<<<<< HEAD
            'Assertion Succeeded (Constraint: %s%s)',
            $this->constraint,
=======
            'Assertion Succeeded (Constraint: %s, Value: %s%s)',
            $this->constraint,
            $this->value,
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
            $message
        );
    }
}
