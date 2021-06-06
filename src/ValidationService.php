<?php
declare(strict_types=1);

namespace knotlib\services;

use knotlib\validation\ValidationError;
use knotlib\validation\ValidatorInterface;

final class ValidationService
{
    /** @var ValidatorInterface[] */
    private $validators;

    /**
     * Add validator
     *
     * @param ValidatorInterface $validator
     */
    public function addValidator(ValidatorInterface $validator)
    {
        $this->validators[] = $validator;
    }

    /**
     * Execute validators
     *
     * @return ValidationError[]
     */
    public function validate() : array
    {
        $ret = [];

        if (is_array($this->validators)){
            foreach($this->validators as $v){
                $errors = $v->validate();
                if (count($errors) > 0){
                    $ret = array_merge($ret, $errors);
                }
            }
        }

        return $ret;
    }
}