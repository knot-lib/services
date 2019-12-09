<?php
declare(strict_types=1);

namespace KnotLib\Service;

use KnotLib\Validation\ValidationError;
use KnotLib\Validation\ValidatorInterface;

final class ValidationService extends BaseService
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