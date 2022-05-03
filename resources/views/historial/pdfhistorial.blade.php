<!DOCTYPE html>
<html>

<head>
    {{-- <link rel="icon" type="image/svg" href="{{asset('images/logoweb.svg')}}" /> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <title>Reporte de pedidos Comercio hola</title>
</head>

<style>
    @page {
        margin: 90px 60px;
    }

    header {
        position: fixed;
        top: -90px;
        left: 0px;
        right: 0px;
        height: 10px;
    }

    footer {
        position: fixed;
        bottom: -90px;
        left: 0px;
        right: 0px;
        height: 50px;
    }

    .page-number:after {
        content: counter(page);
    }

    table {
        border-collapse: collapse;
        width: 100%;
        padding-left: 0%;
        border: 1px solid #e0e0e0;
    }

    p.saltodepagina {
        page-break-after: always;
    }

    td {
        padding: 2px;
        text-align: left;
        border-bottom: 2px solid #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;

    }

    th {
        background-color: #0077b5;
        color: white;
        text-align: center;
        padding: 2px;
    }

    body {
        padding-top: 50px;
        font-family: Helvetica, Futura, Arial, Verdana, sans-serif;
    }

    .page-break {
        page-break-after: always;
    }

</style>

<body>
    <header>
        <?php
        $nombreImagen = 'clinica.jpg';
        $imagenBase64 = 'data:image/jpg;base64,' . base64_encode(file_get_contents($nombreImagen));
        ?>

        <div style="position: relative">
            <div style="position: absolute">
                <img src="<?php echo $imagenBase64; ?>" style="height: 50px;width:auto;margin-top: 2.5em; ">
            </div>
            <div style="position: absolute;text-align: left">
                <p style="font-size: 10px;margin-top: 3em;margin-left: 25em;vertical-align:middle;">Historial Médico:
                    {{ \Carbon\Carbon::now() }}</p>
            </div>
        </div>
    </header>
    <footer>
        <div style="position: relative">
            <div style="position: absolute;text-align: left">
                <p style="font-size: 10px;margin-left: 10em;vertical-align:middle;color: #888888;">
                    <strong>"Clínica Miranda"</strong>
                    Para contactarse llamar al 71005231 angelicamirandau@gmail.com
                </p>
            </div>
            <div style="position: absolute;text-align: right">
                <p class="page-number"
                    style="font-size: 10px;margin-top: 1em;margin-left: 1em;vertical-align:middle;">
                    Página </p>
            </div>
        </div>


    </footer>
    <div>


        <h4>Historial Médico</h4>



        <p style="font-size: 12px;margin-top: 0.5em;padding: 0; margin: 0;"><strong>Paciente:</strong>
            {{ $paciente->name }}
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Carnet de Identidad:</strong> {{ $paciente->ci }}
        </p>
       
    
        <p style="font-size: 12px;margin-top: 0.5em;padding: 0; margin: 0;">
            <strong>Fecha de Nacimiento:</strong> {{ $paciente->fechanacimiento }}
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Telefono:</strong> {{ $paciente->telefono }}
        </p>
       
        <p style="font-size: 12px;margin-top: 0.5em;padding: 0; margin: 0;">
            <strong>Cantidad de Consultas:</strong>{{ $cantidad }}
        </p>
   
        @foreach ($citas as $cita)
            @foreach ($consultas as $consulta)
                @if ($consulta->idcita == $cita->id)
                    <h3>Consulta </h3>
                    <h5>Resumen de Consulta</h5>
                    <p style="font-size: 15px;margin-top: 0.5em;padding: 0; margin: 0;">

                        <strong>Fecha de Consulta:</strong> {{ $cita->fecha }}
                    </p>
                    <table id='kardex'>

                        <thead>
                            <tr>
                                <th>Peso</th>
                                <th>Temperatura</th>

                                <th>Estatura</th>
                                <th>Presion</th>
                                <th>Descripción</th>

                            </tr>
                            {{-- <th>user</th> --}}
                        </thead>

                        <tbody>

                            <tr>

                                <td>{{ $consulta->peso }}</td>
                                <td>{{ $consulta->temperatura }}</td>
                                <td>{{ $consulta->estatura }}</td>
                                <td>{{ $consulta->presion }}</td>
                                <td>{{ $consulta->tipo }}</td>
                                {{-- <td>{{$contrato->users->name}}</td> --}}

                            </tr>

                        </tbody>


                    </table>

                  
                    @foreach ($recetas as $receta)
                        @if ($receta->idconsulta == $consulta->id)
                            <h5>Resumen de receta</h5>
                            <table id='kardex'>

                                <thead>
                                    <tr>
                                        <th>Medicamento</th>
                                        <th>Dosis</th>

                                        <th>Observaciones</th>

                                    </tr>
                                    {{-- <th>user</th> --}}
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>{{ $receta->medicamento }}</td>
                                        <td>{{ $receta->Dosis }}</td>
                                        <td>{{ $receta->observaciones }}</td>

                                    </tr>

                                </tbody>


                            </table>
                            <?php
                            $nombreImagen = "imagenes/$receta->imagen";
                            $imagenBase64 = 'data:image/jpg;base64,' . base64_encode(file_get_contents($nombreImagen));
                            ?>
                            <img src="<?php echo $imagenBase64; ?>" style="height: 500px;width:auto;margin-top: 2.5em; ">
                            <div class="page-break"></div>
                        @endif
                    @endforeach

                    @foreach ($analisis as $analisi)
                        @if ($analisi->idconsulta == $consulta->id)
                            <h5>Resumen de Análisis</h5>
                            <table id='kardex'>

                                <thead>
                                    <tr>
                                        <th>Tipo de Analisis</th>
                                        <th>Fecha Programada</th>



                                    </tr>
                                    {{-- <th>user</th> --}}
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>{{ $analisi->tipo }}</td>
                                        <td>{{ $analisi->fecha }}</td>


                                    </tr>




                                </tbody>


                            </table>
                            <?php
                            $nombreImagen = "imagenes/$analisi->imagen";
                            $imagenBase64 = 'data:image/jpg;base64,' . base64_encode(file_get_contents($nombreImagen));
                            ?>
                            <img src="<?php echo $imagenBase64; ?>" style="height: 300px;width:auto;margin-top: 2.5em; ">
                            <div class="page-break"></div>
                            @foreach ($resultados as $resultado)
                            @if ($resultado->idanalisis == $analisi->id)
                            <h5>Resumen de Resultado</h5>
                            <table id='kardex'>

                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                       



                                    </tr>
                                    {{-- <th>user</th> --}}
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>{{ $resultado->descripcion }}</td>
                                      


                                    </tr>




                                </tbody>


                            </table>
                            <?php
                            $nombreImagen = "imagenes/$resultado->imagen";
                            $imagenBase64 = 'data:image/jpg;base64,' . base64_encode(file_get_contents($nombreImagen));
                            ?>
                            <img src="<?php echo $imagenBase64; ?>" style="height: 300px;width:auto;margin-top: 2.5em; ">
                            <div class="page-break"></div>
                            @endif
                                
                            @endforeach
                           
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endforeach




    

    </div>

    </div>

</body>

</html>
