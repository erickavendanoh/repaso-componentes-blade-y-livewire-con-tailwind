@extends('layouts.app')
@section('contenido')
    <h1>Prueba contenido (uso de directivas @ yield y @ section en Laravel)</h1>
    <h1 class="text-3xl font-bold underline">
        Hello world! (prueba Tailwind)
      </h1>
    
    {{-- Componentes Blade (de clase) --}}
    <x-alert />

    <hr class='my-3'>

    <x-alert color="red" />

    <hr class='my-3'>

    <x-alert color="yellow">
        Contenido en slot
    </x-alert>

    <hr class='my-3'>

    <x-alert>
        Contenido en slot
        <x-slot name="slotWithName">
            Contenido en slot con nombre "slotWithName"
        </x-slot>
    </x-alert>

    <hr class='my-3'>

    {{-- Prueba donde emplear "$attributes" para aplicar un estilo determinado solo a un componente en especifico ("class=mb-5", como "class" no corresponde a ningun atributo, ni a $slot o algún $slot con nombre, toda la cadena ("class=mb-5") se almacena tal cual dentro del "$attributes" del componente, y y en el front del componente se hace la lógica con "...merge()..." para que en aplicación de componentes donde esté se aplique ese estilo también) --}}
    <x-alert class="mb-5" color="yellow"> 
        Componente con estilo de separación en margen inferior
    </x-alert>
    <x-alert color="yellow">
        Componente de prueba para verificar que estilo de separación solo se aplico a uno
    </x-alert>
    <x-alert color="yellow">
        Componente de prueba para verificar que estilo de separación solo se aplico a uno
    </x-alert>

    <hr class='my-3'>

    {{-- Componentes Blade (anónimos) --}}
    {{-- Los creados directamente con archivo en resources/views/components --}}
    <x-alert2 />

    <hr class='my-3'>

    <x-alert2 color="red">
        Contenido en slot
    </x-alert2>

    <hr class='my-3'>

    <x-alert2>
        Contenido en slot
        <x-slot name="slotWithName2">
            Contenido en slot con nombre "slotWithName2"
        </x-slot>
    </x-alert2>

    <hr class='my-3'>

    {{-- Prueba donde emplear "$attributes" para aplicar un estilo determinado solo a un componente en especifico ("class=mb-5")--}}
    <x-alert2 class="mb-5">
        Componente con estilo de separación en margen inferior
    </x-alert2>
    <x-alert2>
        Componente de prueba para verificar que estilo de separación solo se aplico a uno
    </x-alert2>
    <x-alert2>
        Componente de prueba para verificar que estilo de separación solo se aplico a uno
    </x-alert2>

    <hr class='my-3'>

    {{-- Livewire --}}
    <livewire:counter />

@endsection