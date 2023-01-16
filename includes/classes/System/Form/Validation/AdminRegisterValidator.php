<?php namespace System\Form\Validation;

use System\Users\Admin;

/**
 * Class LoginValidator
 * @package System\Form\Validation
 */
class AdminRegisterValidator implements Validator
{
    private array $errors = [];


    /**
     * Register Admin constructor
     *
     * @param Admin $admin
     */
    public function __construct(private readonly Admin $admin)
    {
    }

    /**
     * Validate the data
     */
    public function validate(): void
    {
        //Check if data is valid & generate error if not so
        if ($this->admin->username == '') {
            $this->errors[] = 'username cannot be empty';
        }
        if ($this->admin->password == '') {
            $this->errors[] = 'password cannot be empty';
        }
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
