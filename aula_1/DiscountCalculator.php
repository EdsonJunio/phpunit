<?php



class DiscountCalculator {

    const MINIMUN_VALUE = 100;
    const DISCOUNT_VALUE = 20;

    public function apply($value)
    {
        if ($value > self::MINIMUN_VALUE) {
            return $value - self::DISCOUNT_VALUE;
        }

        return $value;
    }
}