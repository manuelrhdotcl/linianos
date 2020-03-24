<?php

namespace Linianos;

class Linio
{
    private Iterator $iterator;
    private array $elements;
    public array $data = [];

    /**
     * Linio constructor.
     * @param Iterator $iterator
     */
    public function __construct(Iterator $iterator)
    {
        $this->iterator         = $iterator;
    }

    /**
     * @return array
     */
    public function process(): array
    {
        $items = $this->iterator->items();

        foreach ($items as $item) {
            $number           = new Challenge();
            $element          = $number($item);
            $this->elements[] = $element;
        }

        return $this->elements;

    }

    /**
     * @return array
     */
    public function toArray()
    {
        $data = [];
        foreach($this->elements as $element) {
            $data[] = [
                'value' => $element->value(),
                'label' => $element->label(),
            ];
        }

        return $data;
    }
}