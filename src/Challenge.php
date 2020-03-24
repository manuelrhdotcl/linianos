<?php

namespace Linianos;

use Linianos\Number;

class Challenge
{
    const MULTIPLEOF3   = "IT";
    const MULTIPLEOF5   = "Linio";
    const MULTIPLE3AND5 = "Linianos";

    public Number $item;

    /**
     * @param int $value
     * @return Number
     */
    public function __invoke(int $value): Number
    {
        $this->item = $this->itemConfig($value, (string)$value);

        $this->isMultiple($value, 3, self::MULTIPLEOF3);
        $this->isMultiple($value, 5, self::MULTIPLEOF5);
        $this->isMultiple($value, 15, self::MULTIPLE3AND5);

        return $this->item;
    }

    /**
     * @param int $numerator
     * @param int $denominator
     * @param string $label
     */
    private function isMultiple(int $numerator, int $denominator, string $label): void
    {
        if ($numerator % $denominator === 0) {
            $this->item = $this->itemConfig($numerator, $label);
        }

    }

    /**
     * @param int $value
     * @param string $label
     * @return Number
     */
    private function itemConfig(int $value, string $label): Number
    {
        $itemValue   = $value;
        $itemLabel   = $label;
        return new Number($itemValue, $itemLabel);
    }
}