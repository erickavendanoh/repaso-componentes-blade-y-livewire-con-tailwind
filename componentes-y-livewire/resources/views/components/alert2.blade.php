{{-- Estilos de Tailwind empleados para diseño de alerta sacados de: https://tailwindcomponents.com/component/simple-alert-1 --}}

{{-- @props(['color']) --}}
@props(['color' => 'green'])

<div>
    <div {{$attributes->merge(["class"=>'flex flex-row bg-gray-900 h-10 w-[1200px] rounded-[30px]'])}} >
        <span class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>(Alert 2) Your request has been submitted</span>
        <p class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>{{$slot}}</p>
        <p class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>{{$slotWithName2 ?? ''}}</p>
        <div class='w-[10%] bg-{{$color}}-400 rounded-r-2xl shadow-[0_0_20px_#00C85177]'></div>
    </div>
</div>