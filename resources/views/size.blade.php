<x-public-layout>
        <h1 class="text-center text-4xl font-bold py-5 col-span-3">tallas de  Productos </h1>
        @foreach($sizes as $size)
        <a href=" {{ route('sizes.product' , $size->size) }} "> 
        <x-card-product>
            <div>
                id de talla : {{$size->id}}
            </div>
            <div>
                talla :{{$size->size}}
            </div>
            
        </x-card-product>
        </a>
        @endforeach
    </x-public-layout>
    <!-- esta parte es la paginacion de la pagina  -->
   