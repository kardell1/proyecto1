<x-public-layout>
        <h1 class="text-center text-4xl font-bold py-5 col-span-3">Productos disponibles tallas</h1>
        <x-card-product>
            <div >
                @foreach( $sizes->products  as $product) {
                    <x-card-options>
                        <div>{{$product->id}}</div>
                        <div> {{$product->name}}</div>
                        <div> {{$product->price}}</div>
                    </x-card-options>
                }
                @endforeach
                
            </div>
        </x-card-product>
    </x-public-layout>