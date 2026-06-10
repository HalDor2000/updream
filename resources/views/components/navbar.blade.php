@props([
    'textColor' => 'text-white',
    'activeColor' => 'border-white',
    'hoverColor' => 'hover:border-white',
    'logo' => 'img/logo2.png',
])



<nav class="relative z-10 flex items-center justify-between px-16 py-10">

    <div class="flex gap-16 font-semibold uppercase text-xl">

        @php
            $linkClass = "
            {$textColor}
            border-b-4
            pb-1
            transition-all
            duration-300
            {$hoverColor}
            ";
        @endphp
        <a href="{{ route('home') }}"
            class="{{ $linkClass }} {{ request()->routeIs('home') ? $activeColor : 'border-transparent' }}">
            Inicio
        </a>

        <a href="{{ route('portafolio') }}"
            class="{{ $linkClass }} {{ request()->routeIs('portafolio') ? $activeColor : 'border-transparent' }}">
            Portafolio
        </a>

        <a href="{{ route('servicios') }}"
            class="{{ $linkClass }} {{ request()->routeIs('servicios') ? $activeColor : 'border-transparent' }}">
            Servicios
        </a>

        <a href="{{ route('contacto') }}"
            class="{{ $linkClass }} {{ request()->routeIs('contacto') ? $activeColor : 'border-transparent' }}">
            Contáctanos
        </a>

    </div>

    <img src="{{ asset($logo) }}" alt="Up Dream" class="h-20 md:h-28 w-auto">

</nav>
