<?php

declare(strict_types=1);

namespace PrintDate;

class PrintDate
{
    public function printCurrentDate(): void
    {
        echo date("Y-m-d H:i:s");
    }
}
