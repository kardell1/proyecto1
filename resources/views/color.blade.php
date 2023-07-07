<x-public-layout>
        <h1 class="text-center text-4xl font-bold py-5 col-span-3">Colores de  Productos </h1>
        @foreach($colors as $color)
        <a href=" {{ route('colors.product' , $color->color) }} "> 
        <x-card-product>
            <div>
                id de color : {{$color->id}}
            </div>
            <div>
                Color :{{$color->color}}
            </div>
            
        </x-card-product>
        </a>
        @endforeach
    </x-public-layout>
    <!-- esta parte es la paginacion de la pagina  -->
   