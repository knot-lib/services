<?php
declare(strict_types=1);

namespace knotlib\service\test;

use PHPUnit\Framework\TestCase;

use knotlib\service\ValidationService;
use knotlib\service\test\classes\OddValidator;
use knotlib\service\test\classes\PrimeValidator;

final class ValidationServiceTest extends TestCase
{
    public function testAddValidator()
    {
        $svc = new ValidationService();

        $errors = $svc->validate();

        $this->assertEmpty($errors);

        $svc->addValidator(new OddValidator(2));

        $errors = $svc->validate();

        $this->assertNotEmpty($errors);
    }
    public function testValidate()
    {
        $svc = new ValidationService();

        $svc->addValidator(new OddValidator(3));
        $svc->addValidator(new PrimeValidator(3));

        $errors = $svc->validate();

        $this->assertEmpty($errors);

        $svc = new ValidationService();

        $svc->addValidator(new OddValidator(2));
        $svc->addValidator(new PrimeValidator(2));

        $errors = $svc->validate();

        $error = array_shift($errors);

        $this->assertEquals('It is even number', $error->getMessage());

        $svc = new ValidationService();

        $svc->addValidator(new OddValidator(9));
        $svc->addValidator(new PrimeValidator(9));

        $errors = $svc->validate();

        $error = array_shift($errors);

        $this->assertEquals('It is not prime number', $error->getMessage());

        $svc = new ValidationService();

        $svc->addValidator(new OddValidator(4));
        $svc->addValidator(new PrimeValidator(4));

        $errors = $svc->validate();

        $this->assertCount(2, $errors);
        $this->assertEquals('It is even number', $errors[0]->getMessage());
        $this->assertEquals('It is not prime number', $errors[1]->getMessage());
    }
}