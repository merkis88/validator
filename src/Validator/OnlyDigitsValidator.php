<?php

namespace Merkis88\Validator\Validator;

use Validator\AbstractValidator;

class OnlyDigitsValidator extends AbstractValidator
{
    protected string $message = "Поле :field должно содержать только цифры.";

    public function rule(): bool
    {
        return preg_match('/^\d+$/', (string)$this->value);
    }
}
