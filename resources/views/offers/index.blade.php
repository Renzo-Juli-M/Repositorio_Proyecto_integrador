@extends('layouts.app')

@section('content')
<div class="content" style="margin-left: 20px">
    <h1 class="text-2xl font-semibold mb-6">Ofertas Gola Mundo</h1>

    @if($message = Session::get('success'))
        <script>
            Swal.fire({
                title: "Buen trabajo",
                text: "{{$message}}",
                icon: "success"
            });
        </script>
    @endif

    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categorías') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <!-- Tarjeta de ejemplo -->
                    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden mb-4 w-full">
                        <div class="md:flex-shrink-0">
                            <img class="h-48 w-full object-cover md:w-48" src="{{ asset('images/images.jpg') }}" alt="Image">
                        </div>
                        <div class="p-4 flex flex-col justify-between w-full">
                            <div>
                                <h5 class="text-xl font-semibold">Apartamento Centro Life by Casasol</h5>
                                <p class="text-gray-500">Nerja, Andalucía &middot; 200 m de la costa</p>
                                <p class="mt-2">Espacio para 4 pers. &middot; 2 dormitorios &middot; 70 m²</p>
                                <p class="text-gray-500">Wifi &middot; Aire acondicionado &middot; Cocina &middot; Lavadora</p>
                            </div>
                            <div class="mt-4 flex items-center justify-between">
                                <div>
                                    <p class="text-xl font-semibold text-green-500">68 €</p>
                                    <p class="text-sm text-gray-500">por noche</p>
                                </div>
                                <button
                                    class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                                    MÁS DETALLES
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Repite esta estructura para cada tarjeta -->
                    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden mb-4 w-full">
                        <div class="md:flex-shrink-0">
                            <img class="h-48 w-full object-cover md:w-48" src="{{ asset('images/images.jpg') }}" alt="Image">
                        </div>
                        <div class="p-4 flex flex-col justify-between w-full">
                            <div>
                                <h5 class="text-xl font-semibold">Apartamento Centro Top Floor by Casasol</h5>
                                <p class="text-gray-500">Nerja, Andalucía &middot; 250 m de la costa</p>
                                <p class="mt-2">Espacio para 4 pers. &middot; 2 dormitorios &middot; 66 m²</p>
                                <p class="text-gray-500">Wifi &middot; Aire acondicionado &middot; Balcón/Terraza &middot; Cocina</p>
                            </div>
                            <div class="mt-4 flex items-center justify-between">
                                <div>
                                    <p class="text-xl font-semibold text-green-500">69 €</p>
                                    <p class="text-sm text-gray-500">por noche</p>
                                </div>
                                <button
                                    class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                                    MÁS DETALLES
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de tarjeta de ejemplo -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
