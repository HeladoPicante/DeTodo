<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
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
    <section>
        <h1>Lista de Productos</h1>
        <a href="{{ route('productos.crear') }}">Crear Producto</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Paga ISV</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->pagaIsv ? 'True' : 'False' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>