<?php
declare(strict_types=1);

namespace KnotLib\Service\Test;

use KnotLib\Validation\ValidationError;
use KnotLib\Validation\ValidatorInterface;

final class PrimeValidator implements ValidatorInterface
{
    private $value;

    /**
     * OddValidator constructor.
     *
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function validate(): array
    {
        $errors = [];
        if (!self::isPrimeNumber($this->value)){
            // not prime number
            $errors[] = new ValidationError(0, 'It is not prime number', 'some_field', 'some_field');
        }
        return $errors;
    }

    private static function isPrimeNumber(int $value) : bool
    {
        if ($value == 1)    return false;

        for ($i = 2; $i <= $value/2; $i++){
            if ($value % $i == 0)
                return false;
        }
        return true;
    }
}