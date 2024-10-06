<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
if (count($_POST) > 0) {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // Include the main TCPDF library (search for installation path).
    require_once __DIR__ . '/vendor/autoload.php';

    $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir'];

    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];
    $mpdf = new \Mpdf\Mpdf([
        'fontDir' => array_merge($fontDirs, [
            __DIR__ . DIRECTORY_SEPARATOR . 'fonts',
        ]),
        'fontdata' => $fontData + [ // lowercase letters only in font key
            'maquinamatricial' => [
                'R' => 'maquinamatricial.ttf',
                'I' => 'maquinamatricial.ttf',
            ]
        ],
        'default_font' => 'maquinamatricial'
    ]);
    $talon = '
    <table width="100%">
        <tr>
            <td>
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="10%"></td>
            <td width="20%">' . $_POST["title1"] . '</td>
            <td width="10%">' . $_POST["title3"] . '</td>
            <td width="60%"></td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td>
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td>' . $_POST["title2"] . '</td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td>
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="10%">' . $_POST["rfc"] . '</td>
            <td width="15%">' . $_POST["nombrec"] . '</td>
            <td width="75%">' . $_POST["number"] . '</td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td>
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td>' . $_POST["puesto"] . '</td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td>
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="25%">' . $_POST["fecha"] . '</td>
            <td width="15%">' . $_POST["dias_num"] . '</td>
            <td width="60%"></td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td>
            <br>
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="7%"></td>
            <td width="12%">PERCEPCIONES</td>
            <td width="80%">DEDUCCIONES</td>
            </tr>
            </table>
            </td>
        </tr>



        <tr>
            <td width="100%">
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="5%">' . $_POST["perp1"][0] . '</td>
            <td width="13%">' . $_POST["perp2"][0] . '</td>
            <td width="14%">' . retornamonto($_POST["perp3"][0]) . '</td>
            <td width="3%">' . $_POST["ded1"][0] . '</td>
            <td width="15%">' . $_POST["ded2"][0] . '</td>
            <td width="10%">' . retornamonto($_POST["ded3"][0]) . '</td>
            <td width="40%"></td>
            </tr>
            </table>
            </td>
        </tr>

        <tr>
            <td width="100%">
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="5%"></td>
            <td width="13%"></td>
            <td width="14%"></td>
            <td width="3%">' . $_POST["ded1"][1] . '</td>
            <td width="15%">' . $_POST["ded2"][1] . '</td>
            <td width="10%">' . retornamonto($_POST["ded3"][1]) . '</td>
            <td width="40%"></td>
            </tr>
            </table>
            </td>
        </tr>
        ';
    if(isset($_POST["descuento"])){
        $talon .= '
        <tr>
            <td width="100%">
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="5%"></td>
            <td width="13%"></td>
            <td width="14%"></td>
            <td width="3%">' . $_POST["ded1"][2] . '</td>
            <td width="15%">' . $_POST["ded2"][2] . '</td>
            <td width="10%">' . retornamonto($_POST["ded3"][2]) . '</td>
            <td width="40%"></td>
            </tr>
            </table>
            </td>
        </tr>
        ';
    }



    $talon .= '
        <tr>
            <td width="100%">
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="5%">' . $_POST["perp1"][1] . '</td>
            <td width="13%">' . $_POST["perp2"][1] . '</td>
            <td width="14%">' . retornamonto($_POST["perp3"][1]) . '</td>
            <td width="3%" style="color:white">' . $_POST["ded1"][1] . '</td>
            <td width="15%" style="color:white">' . $_POST["ded2"][1] . '</td>
            <td width="10%" style="color:white">' . retornamonto($_POST["ded3"][1]) . '</td>
            <td width="40%"></td>
            </tr>
            </table>
            </td>
        </tr>

        <tr>
            <td width="100%">
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="5%">' . $_POST["perp1"][2] . '</td>
            <td width="13%">' . $_POST["perp2"][2] . '</td>
            <td width="14%">' . retornamonto($_POST["perp3"][2]) . '</td>
            <td width="3%" style="color:white">' . $_POST["ded1"][1] . '</td>
            <td width="15%" style="color:white">' . $_POST["ded2"][1] . '</td>
            <td width="10%" style="color:white">' . retornamonto($_POST["ded3"][1]) . '</td>
            <td width="40%"></td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td width="100%">
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="5%" style="color:white">' . $_POST["perp1"][2] . '</td>
            <td width="13%">TOTAL PERCEPCIONES:</td>
            <td width="14%">' . retornamonto($_POST["totalperp"]) . '</td>
            <td width="3%" style="color:white">' . $_POST["ded1"][1] . '</td>
            <td width="15%">TOTAL DEDUCCIONES:</td>
            <td width="10%">' . retornamonto($_POST["totalded"]) . '</td>
            <td width="40%"></td>
            </tr>
            </table>
            </td>
        </tr>


        <tr>
            <td width="100%">
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="5%" style="color:white">' . $_POST["perp1"][2] . '</td>
            <td width="13%" style="color:white">TOTAL PERCEPCIONES:</td>
            <td width="14%" style="color:white">' . retornamonto($_POST["totalperp"]) . '</td>
            <td width="3%" style="color:white">' . $_POST["ded1"][1] . '</td>
            <td width="15%">L I Q U I D O:</td>
            <td width="10%">' . retornamonto($_POST["liquido"]) . '</td>
            <td width="40%"></td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td>
            <table width="100%" style="border-spacing: 0;border-collapse: collapse;">
            <tr>
            <td width="37%">' . $_POST["letras"] . '</td>
            <td width="63%"></td>
            </tr>
            </table>
            </td>
        </tr>
    </table>
    ';
    $mpdf->WriteHTML($talon);
    delTree('talones'); //Eliminamos dir y archivos
    mkdir('talones'); //creamos el directorio
    $talon_doc = "talones" . DIRECTORY_SEPARATOR . "formato" . rand(0, 10) . rand(11, 30) . rand(31, 99) . ".pdf"; //creamos el nombre del formato
    $mpdf->OutputFile($talon_doc);
    echo json_encode(["archivo" =>$talon_doc]) ;
}

function retornamonto($monto)
{
    $comodin = str_repeat("*", 16);
    $largo = 16 - strlen($monto);
    return substr($comodin, 0, $largo) . $monto;
}

function delTree($dir)
{
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        (is_dir("$dir$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
}
