<?php
declare(strict_types=1);

namespace knotlib\services\test\classes;

use knotlib\validation\ValidationError;
use knotlib\validation\ValidatorInterface;

final class OddValidator implements ValidatorInterface
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
        if ($this->value % 2 === 0){
            // Its even!
            $errors[] = new ValidationError(0, 'It is even number', 'field_name', 'field_code', $this->value);
        }
        return $errors;
    }

}