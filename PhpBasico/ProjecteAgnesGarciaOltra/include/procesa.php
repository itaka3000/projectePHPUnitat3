<?php
include 'cabecera.php';

    if (isset($_REQUEST['finde'])=='on'){
        print "<form style='background-color: #d0c3eb'>";

    }if(isset($_REQUEST['mig'])=='on'){
        print "<form style='background-color: #ccfcb6'>";
    }
    if(isset($_REQUEST['nit'])=='on'){
        print "<form style='background-color: #450707'>";

    }if(isset($_REQUEST['vesprada'])=='on'){
        print "<form style='background-color: #fcf8b6'>";
    }
    else if (isset ($_REQUEST['finde'])=='' & isset($_REQUEST['mig'])=='' & isset($_REQUEST['nit'])=='' & isset($_REQUEST['vesprada'])==''){
        print "<form style='background-color: #ffc2f4'>";
    }

function nombre(){
    $nombre=$_REQUEST["Nombre"];
    if($nombre==""){
        print "<p style=\"text-align: center\">No ha escrit cap nom<br></p>";
    }else {
        print "<p style=\"text-align: center\"> Hola <b>$nombre!!</b> <br></p>";
    }
}
function genere()
{
    $genere = $_POST["question"];
    switch ($genere) {
        case "fantasia":
            print "<p style=\"text-align: center\"> Et recomanem: <br></p>\n";
            print "<img style=' display: block; margin-right: auto; margin-left: auto; width:50%;' src='../img/sabrina.jpg' width='300px' height='400px'>\n";
            print "<p style=\"text-align: center\"> <br><b>Títol Original:</b> Chilling Adventures of Sabrina <br> <b>Any:</b>2018 <br> <b>Duració dels capítols:</b> 60 minuts <br> <b>País:</b> Estats Units <br> <b>Direcció:</b> Aguirre-Sacasa (Creador), Lee Toland Krieger, Rob Seidenglanz, Maggie Kiley, Craig WIlliam Macneill, Viet Nguyen, Alex Garcia Lopez <br> <br> <b>Sinòpsis:</b></p>";
            print "<p style=\"text-align: justify\" >Sabrina está apunt de complir 16 anys i es debat entre el mòn de la màgia de la seua familia i el mòn real dels seus amics. No sap que li deparará el futur, però el que sap es que tindrà moltes aventures amb els seus amics plenes de màgia.<br> </p>";
            break;
        case "cienciaficcio":

            print "<p style=\"text-align: center\"> Et recomanem: <br></p>\n";
            print "<img style=' display: block; margin-right: auto; margin-left: auto; width:50%;' src='../img/Mandalorian.jpg' width='300px' height='400px'>\n";
            print "<p style=\"text-align: center\"> <br><b>Títol Original:</b> The Mandalorian <br> <b>Any:</b>2019 <br> <b>Duració dels capítols:</b> 40 minuts <br> <b>País:</b> Estats Units <br> <b>Direcció:</b> Jon Favreau (Creador), Dave Filoni, Deborah Chow, Rick Famuyiwa, Taika Waititi, Bryce Dallas Howard <br> <br> <b>Sinòpsis:</b></p>";
            print "<p style=\"text-align: justify\" >Ambientada després de la caiguda de l'Imperi i abans de l'aparició de la Primera Ordre, la sèrie segueix els passos de Mando, un caçarecompenses que perteneix a la llegendaria tribu dels mandalorians, un pistoler solitari que treballa als confins de la galàxia, on no arriba l'autoritat de la Nova República.<br></p>";
            break;
        case "historic":

            print "<p style=\"text-align: center\"> Et recomanem: <br></p>\n";
            print "<img style=' display: block; margin-right: auto; margin-left: auto; width:50%;' src='../img/Vikings.jpg' width='300px' height='400px'>\n";
            print "<p style=\"text-align: center\"> <br><b>Títol Original:</b> Vikings <br> <b>Any:</b>2013 <br> <b>Duració dels capítols:</b> 44 minuts <br> <b>País:</b> Irlanda <br> <b>Direcció:</b> Michael Hirst (Creador), Ken Girotti, Ciaran Donnelly, Jeff Woolnough, Stephen St. Leger, Helen Shaver, Daniel Grou, Johan Renck, Kari Skogland, Kelly Makin, Sarah Harding, Ben Bolt, David Wellington <br> <br> <b>Sinòpsis:</b></p>";
            print "<p style=\"text-align: justify\" >Narra la història del heroi Ragnar Lothbrok, dels seus germans vikings i de la seua familia, quan ell es subleva per convertir-se en el rei de les tribus vikingues. A més de ser un guerrer valent, Ragnar encarna les tradicions nòrdiques de la devoció als déus. Segons la llegenda fou un decendent directe del deu Odin.<br></p>";
            break;
        case "drama":

            print "<p style=\"text-align: center\"> Et recomanem: <br></p>\n";
            print "<img style=' display: block; margin-right: auto; margin-left: auto; width:50%;' src='../img/Gambito.jpg' width='300px' height='400px'>\n";
            print "<p style=\"text-align: center\"> <br><b>Títol Original:</b> The Queen's Gambit <br> <b>Any: </b>2020 <br> <b>Duració dels capítols:</b> 60 minuts <br> <b>País:</b> Estats Units <br> <b>Direcció:</b> Scott Frank i Allan Scott <br> <br> <b>Sinòpsis:</b></p>";
            print "<p style=\"text-align: justify\" >Kentucky, anys 60. En plena Guerra Freda, la jove Beth Harmon és una orfana amb una aptitud prodigiosa per a l'escacs, que lluita contra les seues addiccions mentres tracta de convertir-se en la millor jugadora del mòn guanyant als grans mestres, en especial als russos.<br></p>";
            break;
        case "romanç":

            print "<p style=\"text-align: center\"> Et recomanem: <br></p>\n";
            print "<img style=' display: block; margin-right: auto; margin-left: auto; width:50%;' src='../img/EmilyEnParis.jpg' width='300px' height='400px'>\n";
            print "<p style=\"text-align: center\"> <br><b>Títol Original:</b> Emily in Paris <br> <b>Any: </b>2020 <br> <b>Duració dels capítols:</b> 30 minuts <br> <b>País:</b> Estats Units <br> <b>Direcció:</b> Darren Star (Creador), Andrew Fleming <br> <br> <b>Sinòpsis:</b></p>";
            print "<p style=\"text-align: justify\" >Emily, una estatunidenca de vintipocs anys de Chicago, es transllada a Paris per una oportunitat de treball inesperat, encarregada de portar el punt de vista americà a una empresa de marketing francés. Les cultures xoquen mentres s'adapta als desafiaments de la vida en una ciutat extrangera, a l'hora que fa malabars amb la seua carrera, les noves amistats i la seua vida amorosa.<br></p>";
            break;
        case "animacio":

            print "<p style=\"text-align: center\"> Et recomanem: <br></p>\n";
            print "<img style=' display: block; margin-right: auto; margin-left: auto; width:50%;' src='../img/kimetsu.jpg' width='300px' height='400px'>\n";
            print "<p style=\"text-align: center\"> <br><b>Títol Original:</b> Kimetsu no Yaiba<br> <b>Any: </b>2019 <br> <b>Duració dels capítols:</b> 25 minuts <br> <b>País:</b> Japó <br> <b>Direcció:</b> Haruo Sotozaki<br> <br> <b>Sinòpsis:</b></p>";
            print "<p style=\"text-align: justify\" >Tanjirou Kamado és un xic inteligent i de bon cor que viu amb la seua familia i es guanya la vida venguent carbó. Tot canvia quan la seua familia es atacada i assassinada per un dimoni (oni). Tanjirou i la seua germana Nezuko son els únics supervivents a l'inicident, encara que Nezuko ha sigut convertida en dimoni. Tanjirou es converteix en un assassí de dimonis per ajudar a la seua germana a tornar a ser de nou humana i venjar-se de la mort de la seua familia.<br></p>";
            break;
        case "terror":

            print "<p style=\"text-align: center\"> Et recomanem: <br></p>\n";
            print "<img style=' display: block; margin-right: auto; margin-left: auto; width:50%;' src='../img/kimetsu.jpg' width='300px' height='400px'>\n";
            print "<p style=\"text-align: center\"> <br><b>Títol Original:</b> Locke & Key <br> <b>Any: </b>2020 <br> <b>Duració dels capítols:</b> 50 minuts <br> <b>País:</b> Estats Units <br> <b>Direcció:</b> Carlton Cuse(creador), Meredith Averill (creadora), Michael Morris, Vincenzo Natali, Tim Southam, Mark Tonderai, Dawn Wilkinson <br> <br> <b>Sinòpsis:</b></p>";
            print "<p style=\"text-align: justify\" >Després de la mort del pare de la familia Locke, els seus fills tornen a la casa familiar en Nova Anglaterra. Descobreixen que no és una casa qualsevol sinó que está rodejada de màgia que sols ells poden veure i contra la que estan destinats a lluitar per acabar amb els horrors que poblen la ciutat de Lovecraft, Massachusetts.<br></p>";
            break;
    }
}
function On(){
    print "<p style='text-align: center;' </p> \n";
    if (isset($_REQUEST['tv'])=='on'){

        print "<img style=' display: inline-flex; margin: auto; justify-content: center;'  src='../img/tv.png' width='100px' height='100px'>\n";
    }if(isset($_REQUEST['online'])=='on'){

        print print "<img style=' display: inline-flex; margin: auto; justify-content: center;' src='../img/online.png' width='100px' height='100px'>\n";
    }
    else if (isset ($_REQUEST['tv'])=='' && isset($_REQUEST['online'])==''){
        print "<br>No has introduït cap opció d'on sols veure les series<br>";
    }
}
function Quan(){

    if (isset($_REQUEST['finde'])=='on'){
        print "<br>Els caps de setmana <br>";

    }if(isset($_REQUEST['mig'])=='on'){
        print "<br>Al mig dia <br>";
    }
    if(isset($_REQUEST['nit'])=='on'){
        print "<br>A la nit <br>";
    }if(isset($_REQUEST['vesprada'])=='on'){
        print "<br>Per la vesprada <br>";
    }
    else if (isset ($_REQUEST['finde'])=='' & isset($_REQUEST['mig'])=='' & isset($_REQUEST['nit'])=='' & isset($_REQUEST['vesprada'])==''){
        print "<br>No has introduït cap opció de quan sols veure les sèries<br>";
    }
}
    function numeroseries(){
        if(isset ($_REQUEST['serieN'])){
            $conta=$_REQUEST['serieN'];
            print "<br><p style='text-align: center'>Veus un total de sèries: </p>";
            print "<p style='text-align: center;' </p> \n";
            for ( $i=1; $i<=$conta; $i++){
                print "<img src='../img/cantidadseries.png' width='70px' height='70px'>";
            }
        }
    }
function paraules(){

    $total=0;
    $partes="";
    if(isset ($_REQUEST['mensaje'])){
        $mensaje=$_REQUEST['mensaje'];
        $partes=explode(' ', $mensaje);
        for($i=0; $i<=count($partes)-1;$i++){
            $total++;
        }
        print "<br> La teua recomanació ha sigut... <br>";
        foreach ($partes as $palabra) {
            if(strcasecmp($palabra,'php')){
                print " <p style='display: inline-block; border: midnightblue 1px solid; color: blueviolet; text-align: center'> $palabra</p>";
            }else{
                print " <p style=' display: inline-block; border: midnightblue 1px solid; text-align: center'> $palabra</p>";
            }
        }
        print "<br>Hi ha un total de $total paraules<br>";
    }
}
    function puntuacio(){
        if(isset ($_REQUEST['punt'])){
            $punts=$_REQUEST['punt'];
            $totalp=0;
            print "<br><p style='text-align: center'>La puntuació és de: </p>";
            print "<p style='text-align: center;' </p> \n";
            for ( $i=1; $i<=$punts; $i++){
                $totalp++;
                print "<img src='../img/puntuacion.png' width='70px' height='70px'>";
            }print "<br> $totalp de 5 punts<br>";
        }
    }
    function data(){
        $fecha =date('D, d-M-Y');
        $hora=date('H:i');
        print "<br> <br> Estem a: $fecha $hora";
    }
?>
<form method="post" action="procesa.php" autocomplete="on">
                        <fieldset>
                            <?php
                            nombre();
                            genere();
                            On();
                            Quan();
                          numeroseries();
                          paraules();
                          puntuacio();
                          data();
                          ?>
                        </fieldset>
    <ul>
        <a id="volver" href="../index.php">Volver al Formulario</a><br/>
    </ul>
</form>
<?php
include "pie.php";
?>
