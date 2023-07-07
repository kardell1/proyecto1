<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>un producto</title>
</head>
<body>
    <a href="{{ route('options.option') }}" class="font-semibold py-3 px-3 text-3xl" >inicio</a>
    
    <div class=" border border-gray-700 mx-8 my-8   ">
        <div >
            id :{{$product->id}}
        </div>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                <div>
                    <label for="price">Precio:</label>
                    <input type="number" id="price" name="price" value="{{ $product->price }}" required>
                </div>
                <div class="px-4 py-4 bg-blue-500 text-center">
                    <button type="submit" class="btn btn-danger">Actualizar</button>
                </div>
                
            </form>
        <div class="px-4 py-4 bg-blue-500 text-center">
            <!-- Formulario para eliminar el producto -->
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>


        

       

    </div>
    
</body>
</html>