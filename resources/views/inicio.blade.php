@extends('layouts.windmill')
@section('contenido')

<h2 class="my-6 text-2xl font-semibold text-black-700 dark:text-gray-200">
  <a
    href="/"
  >
    Gymtown
  </a>
</h2>

<img class="" src="{{ asset('img/room1.png') }}" alt="" width="1000" height="1000">

<!-- Sucursales  -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  <a href="/sucursales">Sucursales</a>
</h3>
<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
  <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Sucursal {{ $sucursales[0]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        {{ $sucursales[0]->domicilio }}
      </p>
    </div>
  </div>

  
  <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
       Sucursal {{ $sucursales[1]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
      {{ $sucursales[1]->domicilio }}
      </p>
    </div>
  </div>
   <!-- Card --> 
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
      Sucursal {{ $sucursales[2]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        {{ $sucursales[2]->domicilio }}
      </p>
    </div>
  </div>
   <!-- Card --> 
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
      Sucursal {{ $sucursales[3]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        {{ $sucursales[3]->domicilio }}
      </p>
    </div>
  </div>
   <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
      Sucursal {{ $sucursales[4]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        {{ $sucursales[4]->domicilio }}
      </p>
    </div>
  </div>
</div>
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Cuarto de Bicis 
</h3>
<img class="" src="{{ asset('img/banner2.png') }}" alt="" width="1000" height="1000">
<!-- Rutinas -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  <a href="/rutinas">Rutinas</a>
</h3>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">Nombre</th>
          <th class="px-4 py-3">Tiempo</th>
          <th class="px-4 py-3">Descripcion</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Superior.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[0]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
          {{$rutinas[0]->duracion}}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
            {{$rutinas[0]->descripcion}}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/inferior.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[1]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{$rutinas[1]->duracion}}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
              {{$rutinas[1]->descripcion}}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/pecho.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[2]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[2]->nombre }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
            {{ $rutinas[2]->nombre }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/abs.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[3]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[3]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[3]->descripcion }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/brazo.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[4]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[4]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
              {{ $rutinas[4]->descripcion }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/crossfit1.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[5]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[5]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[5]->descripcion }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/crossfit2.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[6]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[6]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[6]->descripcion }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/novatos1.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[7]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[7]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[7]->descripcion }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/novatos2.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[8]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[8]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[8]->descripcion }}
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Zona de Box 
</h3>
<img class="" src="{{ asset('img/category2.png') }}" alt="" width="1000" height="1000">
<!-- Paquetes -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Paquetes
</h3>
<div class="grid gap-6 mb-8 md:grid-cols-2">
  @foreach($paquetes as $paquete)
    <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
      <h4 class="mb-4 font-semibold">
        {{ $paquete->nombre }}
      </h4>
      <h4 class="mb-4 font-semibold">
        Precio $ {{ $paquete->precio }}
      </h4>
      <p>
        {{ $paquete->descripcion }}
      </p>
    </div>
  @endforeach
</div>
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Zona Principal
</h3>
<img class="" src="{{ asset('img/category1.png') }}" alt="" width="1000" height="1000">
<!-- Paquetes -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Descripcion
</h3>
<div class="grid gap-6 mb-8 md:grid-cols-1">
  <div class="min-w-0 p-4 text-white bg-blue-600 rounded-lg shadow-xs">
    <h4 class="mb-4 font-semibold">
      Gymtown
    </h4>
    <p>
      Somos un gran equipo conformado por 5 sucursales en las cuales puedes 
      encontrar de todo, box, biciantro, y la sala principal es inigualble a
      ninguna otra, ojala puedas darte una vuelta y conocer nustras intalaciones
      y nuestros paquetes.
    </p>
  </div>
</div>

@endsection