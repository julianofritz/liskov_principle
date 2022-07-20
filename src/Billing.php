<?php

class Billing
{
    /** @var LicenseInterface */
    private $license;

    /** @var float
     */
    private $value;

    public function __construct(LicenseInterface $license)
    {
        $this->license = $license;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function getLicenseValue(): float
    {
        $fee = $this->license->calcFee($this->value);

        return $fee + $this->value;
    }
}
