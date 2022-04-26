<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\htmlelement;
     
final class htmlelementTest extends TestCase{
    public function DPtesthtmlelement(){
        $class= ITEC\Presencial\DAW\htmlelement/__construct(
            "div",
            ["id"=>"div1"],
            ["class"=>"divclass"],
            [],
            false
        );
    }
}
?>