<?php

interface LicenseInterface
{
    function calcFee(float $value): float;
}
