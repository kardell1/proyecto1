<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <a href="{{ route('options.option') }}" class="font-semibold py-3 px-3 text-3xl" >inicio</a>
    <h1 class="text-center text-4xl font-bold py-5 col-span-3">crear producto</h1>
    <form action="{{route('Admin.store')}}" method="post">
        @csrf
        <div class="flex justify-center flex-col ml-96">
            <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
                <h1>contenido</h1>
            </div>
            <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
                <input
                name="name" 
                type="text"
                placeholder="nombre">
            </div>
            <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
                <input
                name="price"
                type="float" 
                placeholder="precio">
            </div>
            <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
            <label for="colors">colores:</label>
            <div class="w-24">
                <!-- Opciones para seleccionar categorías -->
                @foreach ($colors as $color)
                <div>
                        <input type="checkbox" id="color_{{ $color->id }}" name="colors[]"value="{{ $color->id }}">
                        <label for="color_{{ $color->id }}">{{ $color->color }}</label>
                </div>
                @endforeach
            </div>
            <label for="materials">materiales:</label>
            <div class="w-24">
                <!-- Opciones para seleccionar categorías -->
                @foreach ($materials as $material)
                <div>
                        <input type="checkbox" id="material_{{ $material->id }}" name="materials[]"value="{{ $material->id }}">
                        <label for="material_{{ $material->id }}">{{ $material->material }}</label>
                </div>
                @endforeach
            </div>
            <label for="sizes">tallas:</label>
            <div class="w-24">
                <!-- Opciones para seleccionar categorías -->
                @foreach ($sizes as $size)
                <div>
                        <input type="checkbox" id="size_{{ $size->id }}" name="sizes[]" value="{{ $size->id }}">
                        <label for="size_{{ $size->id }}">{{ $size->size }}</label>
                </div>
                @endforeach
            </div>
            </div>
            <div class="w-24  bg-slate-500 p-6 rounded-lg shadow-md">
                <button type="submit">enviar</button>
            </div>
        </div>
        
    </form>
    
</body>
</html>