<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
    <style>
        html{
            font-family: 'arial';
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: left;
            width: 30%
        }

        div{
            border-bottom: 1px black solid;
            margin: 0 auto;
            padding: 5px 0px;
            display: flex;
            flex-direction: column;
            justify-content: left;
        }
        div:last-of-type{
            margin-bottom: 8px
        }
        button{
            background-color: rgb(151, 151, 245);
            padding: 5px;
        }
        button:hover{
            background-color: rgb(38, 38, 85);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Crear Empleado</h1>
    <form action="{{ route('empleados.guardar') }}" method="POST">
        @csrf
        <div>
            <label for="id_prestamo">ID Préstamo:</label>
            <input type="number" id="id_prestamo" name="id_prestamo" required>
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>
        <div>
            <label for="fechaIngreso">Fecha de Ingreso:</label>
            <input type="date" id="fechaIngreso" name="fechaIngreso" required>
        </div>
        <div>
            <label for="salario">Salario:</label>
            <input type="number" id="salario" name="salario" step="0.01" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>