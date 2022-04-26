<?php
namespace ITEC\Presencial\DAW\htmlelement;

class HTMLELEMENTCLASS{ //Primero se crean las variables y se indican que son
    private string $tagname="";
    private array $attribute=[];
    private array|string|null $content=null;
    private bool $isempty; //Puede ser unicamente o falso o verdadero

    public function __construct( //El lenguaje sabe que hacer con esto
        //Se añade externamente atributos a estos valores
        string $tagname, 
        array $attribute = [], 
        array $content= [], 
        bool $isempty=true
        ){
        $this-> tagname = $tagname; 
        $this-> attribute = $attribute;
        $this-> content = $content;
        $this-> isempty = $isempty;
    }

    public function addAttribute(
        string $attname,
        string $attvalue 
        ){
        return $this-> attribute[$attname] = $attvalue;
    }

    public function removeAttribute( //Este hace cambios internos
        string $attname
        ){
        if(isset($this->attribute[$attname]))
           unset($this->attribute[$attname]);
    }   

    public function addContent(
        array|string|null $content
        ){
        if(is_array($this->content)){
            if (is_array($content))
                $this->content = array_merge($this->content, $content);
            else   
                $this->content[] = $content;
        }else{
            if(is_array($content))
                $this->content = array_merge([$this->content], $content);
            else
            $this->content = $content;
        }
    }

    public function GetTagname(): string { //Comunica un mensaje
        return $this->tagname;
    }

    public function isEmptyElement(): bool{
        return $this->isempty;
    }

    public function GetContent(): array{
        return $this->content;
    }

    public function isSameTag(HTMLELEMENTCLASS $HTMLELEMENTCLASS): bool{
        return $this->tagname == $HTMLELEMENTCLASS-> GetTagname(); //Esta función es pública. Si accedemos a por ejemplo, "tagname", no funcionaría porque es un atributo  privado
    }

    public function getHTML(
            string $tagname,
            string $attribute,
            string $content
            ){
                if(isEmpty()=true){
                    $tagname = GetTagname()
                }
            return $this-> ;
            
    }
    
}

$tag1 = new HTMLELEMENTCLASS("div", ["id"=>"div1", "class"=>"divclass"], [], false);
$tag2 = new HTMLELEMENTCLASS("p", ["id"=>"div2", "class"=>"divclass"], [], false);    

echo $tag1-> GetTagname();
echo $tag2-> GetTagname();
//Muestra en pantalla el nombre del tag