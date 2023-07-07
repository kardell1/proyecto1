<!-- en este layouts ponemos cosas que se repitan en general de la pagina , funciona como un componente -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pagina Usuarios</title>
</head>
<body>
    <a href="{{ route('options.option') }}" class="font-semibold py-3 px-3 text-3xl" >inicio</a>
    <div class="grid grid-cols-3 gap-4">
        {{$slot}}
    </div>
</body>
</html>