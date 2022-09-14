<?php

namespace Practice\BlogPost\Validators;

interface ValidatorContract
{

    /**
     * Returns validation errors
     *
     * @return array
     */
    public function errors(): array;

    /**
     * Validates user input
     *
     * @return array
     */
    public function validate(): array;

    /**
     * Defines rules for validation
     *
     * @return array
     */
    public function rules(): array;
}