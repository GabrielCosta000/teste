<x-app-layout>
    <div class="flex justify-center mt-10">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-justify">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Empresas cadastradas</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Número de empresas cadastradas: {{$count}}</p>

            <a href="{{route('empresa.index')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#2C6B5B] rounded-lg hover:bg-[#468676] focus:ring-4 focus:outline-none focus:ring-green-700">
                Ver mais
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>

</x-app-layout>