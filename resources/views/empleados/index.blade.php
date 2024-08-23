<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
    <style>
        html{
            font-family: 'arial'
        }

        th, td{
            padding: 8px;
            border: 1px solid black;
        }

        th{
            background-color: rgb(199, 240, 227)
        }
    </style>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <a href="{{ route('empleados.crear') }}">Crear Empleado</a>
    <table>
        <thead>
            <tr>
                <th>ID Préstamo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Ingreso</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id_prestamo }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->fechaIngreso }}</td>
                    <td>{{ $empleado->salario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>