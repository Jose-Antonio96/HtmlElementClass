<?php
    use PHPUnit\Framework\TestCase;
    use ITEC\Presencial\DAW\html;
use ITEC\Presencial\DAW\htmlelement\HTMLELEMENTCLASS;

    final class htmlelementsclassTest extends TestCase{

        public function DPtestToHTML(){
            return[
                "Test BR" =>[
                    "<br>",
                    "br",
                    [],
                    null,
                    true
                ],
                "TEST P"=> [
                    'p id="p1" class=parrafo"> Hola ',
                    "p",
                    ["id"=> "p1", "class" => "parrafo"],
                    "Hola",
                    false
                ]
                ];
            }
        /**
        *@dataProvider DPtestToHTML
        */
    
        public function testToHTML($esperado, $tagname, $attribute, $content, $isempty){
            $tagObject = new HTMLELEMENTCLASS($tagname, $attribute, $content, $isempty);
            $this->assertEquals(
                $esperado, 
                 $tagObject->getHtml());
            }  
    }
?>
    
