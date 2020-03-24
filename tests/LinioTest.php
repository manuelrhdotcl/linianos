<?php

namespace Tests;

use Linianos\Iterator;
use Linianos\Linio;
use Linianos\Response;
use PHPUnit\Framework\TestCase;

class LinioTest extends TestCase
{

    private $rawArrayData = ["1", "2", "IT", "4", "Linio", "IT", "7", "8", "IT", "Linio", "11",
                        "IT", "13", "14", "Linianos", "16", "17", "IT", "19", "Linio", "IT",
        "22", "23", "IT", "Linio", "26", "IT", "28", "29", "Linianos", "31", "32", "IT", "34",
        "Linio", "IT", "37", "38", "IT", "Linio", "41", "IT", "43", "44", "Linianos", "46", "47",
        "IT", "49", "Linio", "IT", "52", "53", "IT", "Linio", "56", "IT", "58", "59", "Linianos",
        "61", "62", "IT", "64", "Linio", "IT", "67", "68", "IT", "Linio", "71", "IT", "73", "74",
        "Linianos", "76", "77", "IT", "79", "Linio", "IT", "82", "83", "IT", "Linio", "86", "IT",
        "88", "89", "Linianos", "91", "92", "IT", "94", "Linio", "IT", "97", "98", "IT", "Linio"];

    private $rawJsonString = '[{"value":1,"label":"1"},{"value":2,"label":"2"},{"value":3,"label":"IT"},{"value":4,"label":"4"},{"value":5,"label":"Linio"},{"value":6,"label":"IT"},{"value":7,"label":"7"},{"value":8,"label":"8"},{"value":9,"label":"IT"},{"value":10,"label":"Linio"},{"value":11,"label":"11"},{"value":12,"label":"IT"},{"value":13,"label":"13"},{"value":14,"label":"14"},{"value":15,"label":"Linianos"},{"value":16,"label":"16"},{"value":17,"label":"17"},{"value":18,"label":"IT"},{"value":19,"label":"19"},{"value":20,"label":"Linio"},{"value":21,"label":"IT"},{"value":22,"label":"22"},{"value":23,"label":"23"},{"value":24,"label":"IT"},{"value":25,"label":"Linio"},{"value":26,"label":"26"},{"value":27,"label":"IT"},{"value":28,"label":"28"},{"value":29,"label":"29"},{"value":30,"label":"Linianos"},{"value":31,"label":"31"},{"value":32,"label":"32"},{"value":33,"label":"IT"},{"value":34,"label":"34"},{"value":35,"label":"Linio"},{"value":36,"label":"IT"},{"value":37,"label":"37"},{"value":38,"label":"38"},{"value":39,"label":"IT"},{"value":40,"label":"Linio"},{"value":41,"label":"41"},{"value":42,"label":"IT"},{"value":43,"label":"43"},{"value":44,"label":"44"},{"value":45,"label":"Linianos"},{"value":46,"label":"46"},{"value":47,"label":"47"},{"value":48,"label":"IT"},{"value":49,"label":"49"},{"value":50,"label":"Linio"},{"value":51,"label":"IT"},{"value":52,"label":"52"},{"value":53,"label":"53"},{"value":54,"label":"IT"},{"value":55,"label":"Linio"},{"value":56,"label":"56"},{"value":57,"label":"IT"},{"value":58,"label":"58"},{"value":59,"label":"59"},{"value":60,"label":"Linianos"},{"value":61,"label":"61"},{"value":62,"label":"62"},{"value":63,"label":"IT"},{"value":64,"label":"64"},{"value":65,"label":"Linio"},{"value":66,"label":"IT"},{"value":67,"label":"67"},{"value":68,"label":"68"},{"value":69,"label":"IT"},{"value":70,"label":"Linio"},{"value":71,"label":"71"},{"value":72,"label":"IT"},{"value":73,"label":"73"},{"value":74,"label":"74"},{"value":75,"label":"Linianos"},{"value":76,"label":"76"},{"value":77,"label":"77"},{"value":78,"label":"IT"},{"value":79,"label":"79"},{"value":80,"label":"Linio"},{"value":81,"label":"IT"},{"value":82,"label":"82"},{"value":83,"label":"83"},{"value":84,"label":"IT"},{"value":85,"label":"Linio"},{"value":86,"label":"86"},{"value":87,"label":"IT"},{"value":88,"label":"88"},{"value":89,"label":"89"},{"value":90,"label":"Linianos"},{"value":91,"label":"91"},{"value":92,"label":"92"},{"value":93,"label":"IT"},{"value":94,"label":"94"},{"value":95,"label":"Linio"},{"value":96,"label":"IT"},{"value":97,"label":"97"},{"value":98,"label":"98"},{"value":99,"label":"IT"},{"value":100,"label":"Linio"}]';

    public function testDefaultOutput()
    {
        // arrange
        $sequencer = new Iterator(1, 100, 1);
        $linio     = new Linio($sequencer);
        $expected = $this->expectedDefaultOutput();

        // act
        $linio->process();
        $dataArray  = $linio->toArray();
        $response  = new Response($dataArray);

        // assert
        $this->assertEquals($expected, $response->toChallenge());
    }

    public function testJsonOutput()
    {
        // arrange
        $sequencer = new Iterator(1, 100, 1);
        $linio     = new Linio($sequencer);
        $expected = $this->expectedJsonOutput();

        // act
        $linio->process();
        $dataArray  = $linio->toArray();
        $response  = new Response($dataArray);

        // assert
        $this->assertEquals($expected, $response->toJson());
    }

    public function testIterator1To50()
    {
        // arrange
        $sequencer = new Iterator(1,50,1);

        // act
        $items = $sequencer->items();

        // assert
        $this->assertEquals(50, count($items));
    }

    private function expectedDefaultOutput(){
        return implode(PHP_EOL, $this->rawArrayData);
    }

    private function expectedJsonOutput(){
        return $this->rawJsonString;
    }
}