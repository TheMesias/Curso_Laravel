<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home admin</h1>
    {!! $name !!}
    <?php echo htmlspecialchars($name); ?>
    <!--$country -->
    <x-test label="Nombre" name="nombre" placeholder="Ingrese su nombre"/>
    <x-test label="Apellido"  name="apellido" placeholder="Ingrese su apellido"/>
    <x-test label="Correo"  name="correo" placeholder="Ingrese su correo"/>

    <p>-----------------SECCIONES DINAMICAS --------------------</p>
    {{--Secciones dinamicas --}}

    @extends('admin.app')
    @section('main')
    <h2>Home Page</h2>
    <p>Probando home page</p>
    @endsection

    {{-------------------------}}
</body>
</html>

