<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
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
    <h1>Crear Proveedor</h1>
    <form action="{{ route('proveedores.guardar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="fechaRegistro">Fecha de Registro:</label>
            <input type="date" name="fechaRegistro" id="fechaRegistro" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</body>
</html>