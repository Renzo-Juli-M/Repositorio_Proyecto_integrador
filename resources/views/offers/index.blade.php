@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="ofertas-container">
    <h1 class="text-2xl font-semibold mb-6">Ofertas de Departamentos</h1>

    <!-- inicio de cards -->
    <div class="oferta-card">
        <div class="imagen-container">
            <img src="{{ asset('images/images.jpg') }}" alt="Apartamento Centro Life">
        </div>
        <div class="detalles-container">
            <h2>Apartamento Centro Life by Casasol</h2>
            <p>Nerja, Andalucía · 200 m de la costa</p>
            <p>Espacio para 4 pers. · 2 dormitorios · 70 m²</p>
            <p>Wifi · Aire acondicionado · Cocina · Lavadora</p>
            <div class="precio-container">
                <p class="precio">68 €</p>
                <p>por noche</p>
            </div>
            <div class="button-container">
                <button onclick="openModal('Apartamento Centro Life by Casasol')">Reservar</button>
                <button onclick="openModal('Apartamento Centro Life by Casasol')">Apartar</button>
            </div>
        </div>
    </div>

    <div class="oferta-card">
        <div class="imagen-container">
            <img src="{{ asset('images/ima.jpg') }}" alt="Apartamento Ocean View">
        </div>
        <div class="detalles-container">
            <h2>Apartamento Ocean View</h2>
            <p>Marbella, Andalucía · 150 m de la playa</p>
            <p>Espacio para 6 pers. · 3 dormitorios · 90 m²</p>
            <p>Wifi · Aire acondicionado · Cocina · Lavadora</p>
            <div class="precio-container">
                <p class="precio">120 €</p>
                <p>por noche</p>
            </div>
            <div class="button-container">
                <button onclick="openModal('Apartamento Ocean View')">Reservar</button>
                <button onclick="openModal('Apartamento Ocean View')">Apartar</button>
            </div>
        </div>
    </div>

    <div class="oferta-card">
        <div class="imagen-container">
            <img src="{{ asset('images/a6.jpg') }}" alt="Apartamento Mountain Retreat">
        </div>
        <div class="detalles-container">
            <h2>Apartamento Mountain Retreat</h2>
            <p>Granada, Andalucía · 300 m de la montaña</p>
            <p>Espacio para 2 pers. · 1 dormitorio · 50 m²</p>
            <p>Wifi · Cocina · Lavadora</p>
            <div class="precio-container">
                <p class="precio">80 €</p>
                <p>por noche</p>
            </div>
            <div class="button-container">
                <button onclick="openModal('Apartamento Mountain Retreat')">Reservar</button>
                <button onclick="openModal('Apartamento Mountain Retreat')">Apartar</button>
            </div>
        </div>
    </div>

    <div class="oferta-card">
        <div class="imagen-container">
            <img src="{{ asset('images/a5.jpg') }}" alt="Apartamento Beach House">
        </div>
        <div class="detalles-container">
            <h2>Apartamento Beach House</h2>
            <p>Cádiz, Andalucía · 100 m de la playa</p>
            <p>Espacio para 5 pers. · 2 dormitorios · 85 m²</p>
            <p>Wifi · Aire acondicionado · Cocina · Lavadora</p>
            <div class="precio-container">
                <p class="precio">95 €</p>
                <p>por noche</p>
            </div>
            <div class="button-container">
                <button onclick="openModal('Apartamento Beach House')">Reservar</button>
                <button onclick="openModal('Apartamento Beach House')">Apartar</button>
            </div>
        </div>
    </div>
    <!-- fin de cards -->

    <!-- Puedes repetir la estructura de oferta-card para cada oferta -->
</div>

<!-- Modal -->
<div id="reserva-modal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Reservar Apartamento</h2>
        <form id="reserva-form" action="{{ route('reservar') }}" method="POST">
            @csrf
            <input type="hidden" id="apartamento" name="apartamento">
            <div>
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni" required>
            </div>
            <div>
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            <div>
                <label for="estado_civil">Estado Civil:</label>
                <input type="text" id="estado_civil" name="estado_civil" required>
            </div>
            <div>
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div>
                <label for="fecha_fin">Fecha de Fin:</label>
                <input type="date" id="fecha_fin" name="fecha_fin" required>
            </div>
            <div>
                <label for="monto">Monto a Pagar:</label>
                <input type="number" id="monto" name="monto" required>
            </div>
            <button type="submit">Confirmar Reserva</button>
        </form>
    </div>
</div>

<script>
    function openModal(apartamento) {
        document.getElementById('apartamento').value = apartamento;
        document.getElementById('reserva-modal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('reserva-modal').style.display = 'none';
    }
     // Cerrar el modal si se hace clic fuera de él
     window.onclick = function(event) {
        var modal = document.getElementById('reserva-modal');
        if (event.target == modal) {
            closeModal();
            }
        }
</script>
=======
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
>>>>>>> 94bf8d612bf3bc773a1569486983efb722cd191e
@endsection
