<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\htmlelement\HTMLELEMENTCLASS;
     
final class htmlelementTest extends TestCase{
    public function DPtesthtmlelement(){
        $class1= new HTMLELEMENTCLASS( //Se añade "new" ya que es un nuevo objeto
            "div",
            [" id="=>"div1", " class="=>"divclass"],
            [],
            false
        );
        $class2= new HTMLELEMENTCLASS( //Se añade "new" ya que es un nuevo objeto
            "p",
            [" id="=>"p1", " class="=>"pclass"],
            "Hola",
            false
        );
        return [
            "Prueba 1" => [
                '<div id="div1" class="divclass"></div>',
                $class1
            ],
            "Prueba 2" => [
                '<p id="p1" class="pclass">Hola</p>',
                $class2
            ]
        ];
    }
    /**
     * @@dataProvider DPtesthtmlelement
     */
    public function testhtmelement($esperado, $actual){
        $this-> assertequals($esperado, $actual -> getHTML());
    }
}
?>