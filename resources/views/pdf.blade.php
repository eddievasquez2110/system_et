<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PDF_Document</title>
</head>
<body>
    <div style="display:flex; justify-items:center;">
        <div style="margin-bottom:25px; text-align:center; color:green; font-size: 1.5rem;"><strong>ESPECIFICACIÓN TÉCNICA</strong></div>
        <div style="margin-bottom:25px; color:black;"><strong>AREA USUARIA:  </strong>  {{$equipos->Nombre_Oficina}}RECURSOS HUMANOS</div>
        <div style="margin-bottom:25px; color:black;"><strong>FINALIDAD:  </strong>  Solicito la compra de {{$equipos->Cantidad_Equipo}}02 {{$equipos->Nombre_Tipo_Equipo}} por motivos de renovación de equipos por antiguedad</div>
        <div style="margin-bottom:25px; color:black;"><strong>FECHA:  </strong>  21 de diciembre del 2022</div>
        <table style="margin: 0 auto; border-collapse:collapse; text-align:center justify-items:center;">
            <thead>
                <tr style="padding:8px; background:green;">
                    <th colSpan="2" style="text-transform: uppercase; padding:7px; color:white;"><strong>{{$equipos->Nombre_Tipo_Equipo}}</strong></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($especificacion as $especif)
                <tr>
                    <td style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$especif->Nombre_Especificacion_Equipo}}
                    </td>
                    <td style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$especif->Especificacion_Equipo}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>