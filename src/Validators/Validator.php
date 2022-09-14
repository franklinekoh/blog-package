<?php

namespace Practice\BlogPost\Validators;

class Validator implements ValidatorContract
{

    protected array $request = [];
    protected array $errors = [];

    public function errors(): array
    {
        $this->errors();
    }

    public function validate(): array
    {

    }

    public function rules(): array
    {
        return [];
    }
}