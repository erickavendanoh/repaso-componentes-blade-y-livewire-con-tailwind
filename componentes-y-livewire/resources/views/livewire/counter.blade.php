{{-- Emplea estilos de Tailwind, a excepción del de "text-align: center" que es el que viene por defecto en ejemplo de Livewire --}}
{{-- Estilos de Tailwind empleados en botones sacados de: https://tailwindcomponents.com/component/tailwind-css-icon-button-colors-by-material-tailwind --}}
<div>
    <div style="text-align: center">
        <h1>Componente de Livewire "Counter"</h1>
        <button
            class="middle none relative h-10 max-h-[40px] w-10 max-w-[40px] rounded-lg bg-red-500 text-center font-sans text-xs font-medium uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
            data-ripple-light="true"
            wire:click="decrement"
        >
        -
        </button>
        <span>{{ $count }}</span>
        <button
            class="middle none relative h-10 max-h-[40px] w-10 max-w-[40px] rounded-lg bg-green-500 text-center font-sans text-xs font-medium uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
            data-ripple-light="true"
            wire:click="increment"
        >
        +
        </button>
    </div>
</div>
