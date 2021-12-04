<?php

namespace App\Contracts;

use App\Models\Asset;

interface Transactionable
{
    public function name(): string;

    public function amount(): float;

    public function quantity(): float;

    public function asset(): ?Asset;
}
