<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\htmlelement\HTMLELEMENTCLASS;
     
final class htmlelementTest extends TestCase{
    public function DPtesthtmlelement(){
        $class1= new HTMLELEMENTCLASS( //Se añade "new" ya que es un nuevo objeto
            "div",
            [" id"=>"div1", "class"=>"divclass"],
            [],
            false
        );
        $class2= new HTMLELEMENTCLASS( 
            "p",
            [" id"=>"p1", "class"=>"pclass"],
            "Hola",
            false
        );
        $class3= new HTMLELEMENTCLASS( 
            "article",
            [" id"=>"article1", "class"=>"articleclass"],
            null,
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
            ],
            "Prueba 3" => [
                '<article id="article1" class="articleclass"></article>',
                $class3
            ],
        ];
    }
    /**
     * @dataProvider DPtesthtmlelement
     */
    public function testhtmelement($esperado, $actual){
        $this-> assertequals($esperado, $actual -> getHTML());
    }

    public function DPtestGetTagname(){
        $p = new HTMLELEMENTCLASS("p",
        [" id="=>"p1", " class="=>"pclass"],
        "Adios");
        return [
            "Prueba 4" => [
                'p', $p
            ]
        ];
    }
    /**
     * @dataProvider DPtestGetTagname
     */
    public function testGetTagname($esperado, $actual){
        $this->assertEquals($esperado, $actual->getTagname());
    }

    public function DPtestisemptyElement(){
        $h1 = new HTMLELEMENTCLASS('<h1></h1>');
        return [
            "Prueba 5" => [
                true, $h1
            ]
        ];
    }
    /**
     * @dataProvider DPtestisemptyElement
     */
    public function testisemptyElement($esperado, $actual){
        $this->assertTrue($esperado, $actual->isemptyElement());
    }
    
}
?>