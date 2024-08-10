<x-app-layout>
    @if (session()->has('message'))
    <div id="alert-border-1" class="flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <div class="ms-3 text-sm font-medium">
            {{session()->get('message')}}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-border-1" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endif
    <div class="flex justify-center " style="min-height: 80vh;">
        <div class=" w-4/6 ">
            <div class="flex justify-center mt-10 gap-28 grid grid-cols-2 mb-10">
                @foreach ($empresa as $empresas )
                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow h-96 w-96 grid grid-cols-2 ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center col-span-2">{{$empresas->nome_empresa}}</h5>
                    <div>
                        <p>Nome do Dono:</p>
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{$empresas->nome_dono}}</p>
                    </div>
                    <div>
                        <p>endereço:</p>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Rua manoel gomes 2034</p>
                    </div>
                    <div>
                        <p>Celular:</p>
                        <p class="font-normal text-gray-700 dark:text-gray-400">(99) 9999-9999</p>
                    </div>
                    <div>
                        <p>Telefone</p>
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{$empresas->telefone}}</p>
                    </div>
                    <div>
                        <p>Email:</p>
                        <p class="font-normal text-gray-700 dark:text-gray-400 ">{{$empresas->email}}</p>
                    </div>
                    <div>
                    </div>
                    <a href="{{route('empresa.edit',['empresa'=>$empresas->id])}} " class="flex justify-center items-center">
                        <button type="button" class="text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 bg-yellow-600 hover:bg-yellow-400  font-medium rounded-lg text-sm px-5 py-2.5 text-center w-1/2 ">
                            Editar
                        </button>
                    </a>
                    <a href="{{route('empresa.destroy',[$empresas->id])}}" class="flex justify-center items-center">
                        <button type="button" class="text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-1/2 ">
                            Excluir
                        </button>
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <div class="me-36 text-end absolute">
        <a href="{{route('empresa.create')}}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm fixed right-10 bottom-10">
            <button type="submit" class="w-16 h-16">
                +
            </button>
        </a>
    </div>


</x-app-layout>