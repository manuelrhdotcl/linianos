<?php

namespace Linianos;

class Response {
    public array $data = [];

    /**
     * Response constructor.
     * @param array $data
     */
    public function __construct(array $data) {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function toChallenge() {
        $array = [];
        foreach($this->data as $element){
            $array[] = $element['label'];
        }

        return implode(PHP_EOL, $array);
    }

    /**
     * @return false|string
     */
    public function toJson(){
        return json_encode($this->data);
    }
}