<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>modelo de vistas</h1>
    @foreach($products as $product)
    <div>
        {{$product->name}}
    </div>
    <p>aca abajo el array de users (vista home.blade)</p>
    <!-- para acceder a una relacion de muchos a muchos se necesita una doble iteracion  -->
    <div>
        @foreach ($product->users as $user)
        <div>
            Usuario ID: {{ $user->id }}
            Nombre: {{ $user->name }}
            Email: {{ $user->email }}
        </div>
        @endforeach
    </div>
    @endforeach
</body>
</html>