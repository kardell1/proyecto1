    <x-public-layout>
        <h1 class="text-center text-4xl font-bold py-5 col-span-3">Productos disponibles</h1>
        <div class="text-center py-4 px-4 col-span-3 font-bold bg-green-700 hover:text-yellow-600 text-lg  " >
            <a href="{{route('Admin.create')}}">
                <button>crear</button>
            </a>
        </div>
        @foreach($products as $product)
        <a href=" {{ route('products.show' , $product->id) }} ">
        <x-card-product>
            <div>
                id de producto : {{$product->id}}
            </div>
            <div>
                nombre de producto :{{$product->name}}
            </div>
            <div class="text-red-700">
                precio de producto :{{$product->price}}
            </div>
            <p>aca deberiamos traer tambien los colores y las tallas</p>
            <div class="py-2">
                <!-- para imprimir relaciones que tengan estas tablas con otras tablas hay que desestructurar  -->
                colores de producto :
                @foreach( $product->colors  as $color) {
                    <span class=" bg-slate-900 rounded-xl px-2 py-1 text-yellow-50">
                        {{$color->color}}
                    </span>
                }
                @endforeach
                <!-- colores de producto :{{$product->colors}} -->
            </div>
            <div class="py-2">
                <!-- para imprimir relaciones que tengan estas tablas con otras tablas hay que desestructurar  -->
                tallas de producto :
                @foreach( $product->sizes  as $size) {
                    <span class=" bg-slate-900 rounded-xl px-2 py-1 text-yellow-50">
                        {{$size->size}}
                    </span>
                }
                @endforeach
                <!-- colores de producto :{{$product->colors}} -->
            </div>
            <div class="py-2">
                <!-- para imprimir relaciones que tengan estas tablas con otras tablas hay que desestructurar  -->
                Materiales de producto :
                @foreach( $product->materials  as $material) {
                    <span class=" bg-slate-900 rounded-xl px-2 py-1 text-yellow-50">
                        {{$material->material}}
                    </span>
                }
                @endforeach
                <!-- colores de producto :{{$product->colors}} -->
            </div>
        </x-card-product>
        </a>
        @endforeach
    </x-public-layout>
    <!-- esta parte es la paginacion de la pagina  -->
    <div class="py-4">
        {{$products->links()}}
    </div>