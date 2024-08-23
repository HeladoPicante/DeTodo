<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producot</title>
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
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.guardar') }}" method="POST">
        @csrf
        <div>
            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required>

        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
            
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" required>

        </div>
        <div>
            <label for="pagaIsv">Paga ISV:</label>
            <input type="checkbox" id="pagaIsv" name="pagaIsv">

        </div>
        
        
        
        
        <button type="submit">Guardar</button>
    </form>
</body>
</html>