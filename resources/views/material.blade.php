<x-public-layout>
        <h1 class="text-center text-4xl font-bold py-5 col-span-3">materiales de  Productos </h1>
        @foreach($materials as $material)
        <a href=" {{ route('materials.product' , $material->material) }} "> 
        <x-card-product>
            <div>
                id de material : {{$material->id}}
            </div>
            <div>
                material :{{$material->material}}
            </div>
            
        </x-card-product>
        </a>
        @endforeach
    </x-public-layout>
    <!-- esta parte es la paginacion de la pagina  -->
   