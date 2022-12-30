<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PDF_Document</title>
</head>
<body>
    <div style="display:flex; justify-items:center;">
        <div style="margin-bottom:25px; text-align:center; color:green; font-size: 1.5rem;"><strong>ESPECIFICACIÓN TÉCNICA</strong></div>
        <div style="margin-bottom:25px; color:black;"><strong>Usuario:  </strong>   {{$user->name}}</div>
        <div style="margin-bottom:25px; color:black;"><strong>Correo:  </strong>   {{$user->email}}</div>
        <div style="margin-bottom:25px; color:black;"><strong>Oficina:  </strong>   {{$user->oficina->Nombre_Oficina}}</div>
        <div style="margin-bottom:25px; color:black;"><strong>FECHA:  </strong>{{ date('Y-m-d H:i:s') }}</div>
        <div style="margin-top:50px; color:black;">Resumen de detalle:</div>
        <table style="margin: 60px auto; border-collapse:collapse;">
            <thead>
                <tr style="padding:8px; background:green;">
                    <th  style="text-transform: uppercase; padding:7px; color:white;">
                        N°
                    </th>
                    <th  style="text-transform: uppercase; padding:7px; color:white;">
                        Tipo Equipo
                    </th>
                    <th  style="text-transform: uppercase; padding:7px; color:white;">
                        Uso Equipo
                    </th>
                    <th  style="text-transform: uppercase; padding:7px; color:white;">
                        Cantidad
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($detalle as $det)
                <tr>
                    <th style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$loop->iteration}}
                    </th>
                    <th style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$det->tipoequipos->Nombre_Tipo_Equipo}}
                    </th>
                    <th style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$det->usoequipo->Nombre_Uso_Equipo}}
                    </th>
                    <th style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$det->Cantidad_Equipo}}
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top:50px; color:black;">Especificaciones de Equipo:</div>
        @foreach($detalle as $det)
        <table style="margin: 60px auto; border-collapse:collapse;">
            <thead>
                <tr style="padding:8px; background:green;">
                    <th colSpan="2" style="text-transform: uppercase; padding:7px; color:white;"><strong>{{$loop->iteration}}. {{$det->tipoequipos->Nombre_Tipo_Equipo}}</strong></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($array[$loop->index] as $arr)
                <tr>
                    <td style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$arr->Nombre_Especificacion_Equipo}}
                    </td>
                    <td style="padding:8px; text-align:left; border-bottom:1pt solid black;">
                        {{$arr->Especificacion_Equipo}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @endforeach 
    </div>
</body>
</html>