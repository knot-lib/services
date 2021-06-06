<?php
declare(strict_types=1);

namespace knotlib\services\test\classes;

use knotlib\validation\ValidationError;
use knotlib\validation\ValidatorInterface;

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
            $errors[] = new ValidationError(0, 'It is not prime number', 'field_name', 'field_code', $this->value);
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