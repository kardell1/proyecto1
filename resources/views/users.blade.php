        <!-- para recorrer un objeto json y que nos genere un div dentro de cada iteracion es necesario empaquetarlo dentro de un foreach -->
    <x-public-layout>
        <h1 class=" font-semibold text-center text-4xl py-3 col-span-3 ">
            Datos de la vista usuarios
        </h1>
        @foreach($users as $user)
        <!-- este es el bucle de laravel para iterar  -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg ml-4 py-2 px-2" >
            <!-- este es el div card  -->
            <div>
                nombre :{{$user->name}}
            </div>
            <div>
                usuario : {{$user->user}}
            </div>
            <div>
                celular : {{$user->cellphone}}
            </div>
            <div>
                email : {{$user->email}}
            </div>
            <div>
                edad : {{$user->age}}
            </div>

        </div>
        @endforeach
    </x-public-layout>
    
    <!-- <pre>
        {{$users}}
    </pre> -->

</body>
</html>