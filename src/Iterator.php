<?php

namespace Linianos;
use Linianos\Sequencer\SequencerConfig;
use Linianos\Sequencer\SequencerInterface;

class Iterator extends SequencerConfig Implements SequencerInterface
{

    /**
     * Iterator constructor.
     * @param $start
     * @param $end
     * @param $increment
     */
    public function __construct($start, $end, $increment)
    {
        $this->start = $start;
        $this->end = $end;
        $this->increment = $increment;
        $this->result = [];
    }

    /**
     * @return array
     */
    public function items(): array
    {
        for ($x = $this->start; $x <= $this->end; $x++) {
            $this->result[] = $x;
        }
        return $this->result;
    }

}