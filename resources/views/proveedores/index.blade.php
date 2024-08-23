<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
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
    <h1>Lista de Proveedores</h1>
    <a href="{{ route('proveedores.crear') }}" class="btn btn-primary">Crear Proveedor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Proveedor</th>
                <th>Nombre</th>
                <th>Fecha de Registro</th>
                <th>Teléfono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->id_proveedor }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->fechaRegistro }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>