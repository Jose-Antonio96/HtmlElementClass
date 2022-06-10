<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\htmlelement\htmlelement;
     
final class htmlelementTest extends TestCase{
    public function DPtesthtmlelement(){
        $class1= new htmlelement( //Se añade "new" ya que es un nuevo objeto
            "div",
            [" id"=>"div1", "class"=>"divclass"],
            [],
            false
        );
        $class2= new htmlelement( 
            "p",
            [" id"=>"p1", "class"=>"pclass"],
            "Hola",
            false
        );
        $class3= new htmlelement( 
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
    public function testhtmlelement($esperado, $actual){
        $this-> assertequals($esperado, $actual -> getHTML());
    }

    public function DPtestGetTagname(){
        $p = new htmlelement("p",
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
        $h1 = new htmlelement('<h1></h1>');
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

    public function DPtestisCertainAttribute(){
        $class4= new htmlelement(
            "div",
            [" id"=>"div1", "class"=>"divclass"],
            [],
            false
        );
        $class5= new htmlelement( 
            "nav",
            [" id"=>"nav1", "class"=>"navclass"],
            "Hola",
            false
        );
        $class6= new htmlelement( 
            "i",
            [" id"=>"id1", "class"=>"idclass"],
            null,
            false
        );
        return [
            "Prueba 4" => [
                '<div id="div1" class="divclass"></div>',
                $class4
            ],
            "Prueba 5" => [
                '<nav id="nav1" class="nav1">Hola</nav>',
                $class5
            ],
            "Prueba 6" => [
                '<i id="i1" class="iclass"></i>',
                $class6
            ],
        ];
    }
    /**
     * @dataProvider DPtestisCertainAttribute
     */
    public function testisCertainAttribute($esperado, $actual){
        $this->assertTrue($esperado, $actual->htmlelement::isCertainAttribute());
    }

    public function DPtestcertainValues(){
        $attribute= new htmlelement('autosave="unique666"');
        return [
            "Prueba 7" => [
                true, $attribute
            ]
        ];
    }
    /**
     * @dataProvider DPtestcertainValues
     */
    public function testcertainValues($esperado, $actual){
        $this->assertTrue($esperado, $actual->htmlelement::certainValues());
    }

    public function DPtestcontentUnaccepted(){
        $content= new htmlelement('<br></br>');
        return [
            "Prueba 8" => [
                true, $content
            ]
        ];
    }
    /**
     * @dataProvider DPtestcontentUnaccepted
     */

    public function testcontentUnaccepted($esperado, $actual){
        $this->assertTrue($esperado, $actual->htmlelement::contentUnaccepted());
    }

    
}

?>