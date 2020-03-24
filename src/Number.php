<?php
namespace Linianos;

class Number
{
    private int $value;
    private string $label;

    /**
     * Number constructor.
     * @param int $value
     * @param string $label
     */
    public function __construct(int $value, string $label)
    {
        $this->value = $value;
        $this->label = $label;
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function label(): string
    {
        return $this->label;
    }

}