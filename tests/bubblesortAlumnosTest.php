<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\BubblesortAlumnos;
     
final class bubblesortAlumnosTest extends TestCase{
    public function DPtestbubblesortAlumnos(){
        $alumno1 = ITEC\Presencial\DAW\alumnos\crearalumnos(
            "nombre3",
            "calle tres",
            "12/04/2005",
            "e@.com",
            "12345678V",
        );
        $alumno2 = ITEC\Presencial\DAW\alumnos\crearalumnos(
            "nombre2",
            "calle dos",
            "12/04/2004",
            "e@.com",
            "12345678V",
        );
        $alumno3 = ITEC\Presencial\DAW\alumnos\crearalumnos(
            "nombre3",
            "calle tres",
            "12/04/2002",
            "e@.com",
            "12345678V",
        );
        $listadoAlumnos1 = [$alumno1,$alumno3,$alumno2];
        $listadoAlumnos2 = [$alumno2,$alumno3,$alumno1];
        $listadoAlumnosOrdenAscendente = [$alumno1, $alumno2,$alumno3];
        $listadoAlumnosOrdenDescendente = [$alumno3,$alumno2, $alumno1];
        return [
            "Ascendente" =>[$listadoAlumnosOrdenAscendente,$listadoAlumnos1,"asc"],
            "Descendente" =>[$listadoAlumnosOrdenDescendente,$listadoAlumnos2,"desc"]
        ];
    }

/**
 * @dataProvider DPtestbubbleSortAlumnos
 */
public function testbubbleSortAlumnos($esperado, $array,$mode){
    $ordenado =\ITEC\Presencial\DAW\BubblesortAlumnos\bubblesort2Alumnos($array,$mode);

    $this->assertEquals(
        $esperado,
        $ordenado
    );
}
}
?>