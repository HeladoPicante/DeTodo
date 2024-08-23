<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Crear Empleado</h1>
    <form action="{{ route('empleados.guardar') }}" method="POST">
        @csrf
        <label for="id_prestamo">ID Préstamo:</label>
        <input type="number" id="id_prestamo" name="id_prestamo" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>
        <label for="fechaIngreso">Fecha de Ingreso:</label>
        <input type="date" id="fechaIngreso" name="fechaIngreso" required>
        <br>
        <label for="salario">Salario:</label>
        <input type="number" id="salario" name="salario" step="0.01" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>