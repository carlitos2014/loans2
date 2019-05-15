<!DOCTYPE html>
<html>
<head>
    <title>Solicitud de Credito</title>
    <link rel="stylesheet" href="{{ URL::asset('css/solicitud.css') }}" rel="stylesheet">
</head>
<table width="30%" class="tabla" align="right">
            <tr>
                <td width="10%" align="left">Dia</td>
                <td width="10%" align="left">Mes</td>
                <td width="10%" align="left">Año</td>
            </tr>
            <tr>
                <td width="10%" align="left"><b>#</b></td>
                <td width="10%" align="left"><b>#</b></td>
                <td width="10%" align="left"><b>#</b></td>
            </tr>       
        </table>
        <br>
        <br>
        <p align="right"><br>
CONTRATO No. {{ $credito->id }}<p>
<center>Solicitud de Credito</center>
<table width="100%" class="tabla">
            <tr>
                <td width="50%" align="left">NOMBRE DEL EMPLEADOR</td>
                <td width="50%" align="left">DIRECCION DEL EMPLEADOR</td>
            </tr>
            <tr>
                <td width="50%" align="left"><b>{{ $credito->id }}</b></td>
                <td width="50%" align="left"><b>#</b></td>
            </tr>
            <tr>
                <td width="50%" align="left">NOMBRE DEL TRABAJADOR</td>
                <td width="50%" align="left">DIRECCION DEL TRABAJADOR</td>
            </tr>
            <tr>
                <td width="50%" align="left"><b>#</b></td>
                <td width="50%" align="left"><b>#</b></td>
            </tr>
            <tr>
                <td width="50%" align="left">LUGAR, FECHA DE NACIMIENTO Y NACIONALIDAD</td>
                <td width="50%" align="left">CARGO U OFICIO QUE DESEMPEÑARA</td>
            </tr>
            <tr>
                <td width="50%" align="left"><b>#</b></td>
                <td width="50%" align="left"><b>#</b></td>
            </tr>       
        </table>
        <table width="100%" class="tabla">
            <tr>
                <td width="50%" align="left">SALARIO</td>
            </tr>
            <tr>
                <td width="50%" align="left"><b>#</b></td>
            </tr>
        </table>
        <table width="100%" class="tabla">
            <tr>
                <td width="50%" align="left">PERIODOS DE PAGO</td>
                <td width="50%" align="left">FECHA DE INICIACION DE LABORES</td>
            </tr>
            <tr>
                <td width="50%" align="left"><b>#</b></td>
                <td width="50%" align="left"><b>#</b></td>
            </tr>
            <tr>
                <td width="50%" align="left">LUGAR DONDE DESEMPEÑARA SUS LABORES</td>
                <td width="50%" align="left">CIUDAD DONDE HA SIDO CONTRATADO</td>
            </tr>
            <tr>
                <td width="50%" align="left"><b>#</b></td>
                <td width="50%" align="left"><b>#</b></td>
            </tr>
            <tr>
                <td width="50%" align="left">TERMINO INICIAL DEL CONTRATO</td>
                <td width="50%" align="left">VENCE EL DIA</td>
            </tr>
            <tr>
                <td width="50%" align="left"><b>#</b></td>
                <td width="50%" align="left"><b>#</b></td>
            </tr>
        </table>
<p align="justify">
Entre el EMPLEADOR y el TRABAJADOR, de las condiciones ya dichas, identificados como aparece al pie de sus firmas, se ha celebrado el presente contrato individual de trabajo, regido además por las siguientes cláusulas:
<br>
<b>PRIMERA.-&nbsp;   OBJETO: El EMPLEADOR</b> contrata los servicios personales del <b>TRABAJADOR</b> y este se obliga a: a) a poner al servicio del <b>EMPLEADOR</b> toda su capacidad normal de trabajo, en el desempeño de las funciones propias del oficio mencionado y en las labores anexas y complementarias del mismo, de conformidad con las órdenes e instrucciones que imparta el <b>EMPLEADOR</b> directamente o a través de sus representantes. b) a prestar sus servicios en forma exclusiva al empleador; es decir, a no prestar directa ni indirectamente servicios laborales a otros <b>EMPLEADORES,</b> ni a trabajar por cuenta propia en el mismo oficio, durante la vigencia de este contrato; y c) a guardar absoluta reserva sobre los hechos, documentos físicos y/o electrónicos, informaciones y en general, sobre todos los asuntos y materias que lleguen a su conocimiento por causa o con ocasión de su contrato de trabajo.
<br>
<table width="75%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
<tr>
    <td>El EMPLEADOR</td>
    <td>El TRABAJADOR
</td>
</tr>
</table>
<br>
<table width="75%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
<tr>
<td><b><font style ="text-transform: uppercase;">………………………………</font></b></td>
<td><b><font style="text-transform: uppercase;">………………………………...</font></b></td>
</tr>
<br>
<tr>
<td><b>C.C. <font style="text-transform: uppercase;"/></b></td>
<td><b>C.C.</b></td>
</tr>
</table>
<br>
<br>
<table width="75%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
<tr>
<td><b>TESTIGO  </b></td>
    <td><b>TESTIGO  </b></td>
</tr>
</table>
<br>
<table width="75%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">    
<tr>
    <td><b>……………………………… </b></td>
    <td><b>………………………………...  </b></td>
</tr>
<tr>
    <td><b>C.C.</b></td>
    <td><b>C.C.</b></td>
</tr>
</table>
</html>