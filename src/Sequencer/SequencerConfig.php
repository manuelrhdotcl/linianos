<?php
namespace Linianos\Sequencer;

abstract class SequencerConfig
{
    public array $result = [];
    public int $start;
    public int $end;
    public int $increment;

    /**
     * SequencerConfig constructor.
     * @param $start
     * @param $end
     * @param $increment
     */
    public function __construct($start, $end, $increment)
    {
        $this->start = $start;
        $this->end = $end;
        $this->increment = $increment;
    }
}