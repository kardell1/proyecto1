<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Opciones de datos</title>
</head>
<body>
    <h1 class="text-center font-bold text-2xl py-2" >Informacion de la Productos</h1>
    <div class="grid grid-cols-2 gap-3 " >
        <a href="{{route('products.product')}}">
            <x-card-options >
                opcion1 : productos
            </x-card-options>
        </a>
        <a href="{{route('user.users')}}">
            <x-card-options >
                opcion2 : usuarios registrados
            </x-card-options>
        </a>
        <!-- me falta 3 rutas , de colores , tallas y materiales -->
        <a href="{{route('sizes.size')}}">
            <x-card-options>
                opcione3 : tallas 
            </x-card-options>  
        </a>
        <a href="{{route('materials.material')}}">
            <x-card-options >
                opcion4 : materiales
            </x-card-options>
        </a>
        <a href="{{route('colors.color')}}">
            <x-card-options >
                opcion5 : colores
            </x-card-options>
        </a>
        
    </div>
</body>
</html>