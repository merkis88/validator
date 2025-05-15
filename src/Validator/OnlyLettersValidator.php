<?php

namespace Merkis88\Validator\Validator;

use Validator\AbstractValidator;

class OnlyLettersValidator extends AbstractValidator
{
    protected string $message = "Поле :field должно содержать только буквы.";

    public function rule(): bool
    {
        return preg_match('/^[\p{L}\s\-]+$/u', trim((string)$this->value)) === 1;
    }
}
