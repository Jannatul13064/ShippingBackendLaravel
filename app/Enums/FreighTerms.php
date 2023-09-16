<?php

namespace App\Enums;

// use BenSampo\Enum\Enum;
use Illuminate\Validation\Rules\Enum;

class Status extends Enum
{
    const Prepaid = 'Prepaid';
    const Collected = 'Collected';
}

?>