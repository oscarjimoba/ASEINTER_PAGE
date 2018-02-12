<?php
$nombre=$_GET['nombre'];
$correo=$_GET['correo'];
$asunto=$_GET['asunto'];
$mensaje=$_GET['mensaje'];

$headers  = "From:".$correo."\r\n";
$headers .= "Content-type: text/html\r\n";
//$Para = "siu@conare.ac.cr";
$Para = "gustavo.matamoros@gmail.com";

    $correo = "<html xmlns='http://www.w3.org/1999/xhtml'><head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Nuevo Correo</title>
				</head><body bgcolor='#FFFFFF'><center><h1><font color='#0099FF' size='+2'>Página ASEINTER Informa:</font></h1></br>
                    <table border='1' style='width:80%;border-collapse: collapse;'>
                    <tr style='background-color:#0099FF; color:#FFFFFF; font-size:18px; text-align:center'>
                        <td colspan='2'>
                            Información del correo:
                        </td>
                    </tr>
                    <tr>
                        <td style='background-color:#0099FF; color:#FFFFFF; font-size:14px; text-align:left; width:110px;'>
                            <b>Mensaje de:</b>
                        </td>
                        <td>
                            ".$nombre."
                        </td>
                    </tr>
                    <tr>
                        <td style='background-color:#0099FF; color:#FFFFFF; font-size:14px; text-align:left'>
                            <b>Correo:</b>
                        </td>
                        <td>
                            ".$correo."
                        </td>
                    </tr>
                    <tr>
                        <td style='background-color:#0099FF; color:#FFFFFF; font-size:14px; text-align:left'>
                            <b>Asunto:</b>
                        </td>
                        <td>
                            ".$asunto."
                        </td>
                    </tr>
                    <tr>
                        <td style='background-color:#0099FF; color:#FFFFFF; font-size:14px; text-align:left'>
                            <b>Mensaje:</b>
                        </td>
                        <td>
                            ".$mensaje."
                        </td>
                    </tr>
		</table></center></body></html>";



    if (mail($Para, $asunto, $correo , $headers)) {
	echo 1;
    } else {
	echo 2;
    }


?>
