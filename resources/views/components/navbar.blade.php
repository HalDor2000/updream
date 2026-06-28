@props([
    'textColor' => 'text-white',
    'activeColor' => 'border-white',
    'hoverColor' => 'hover:border-white',
    'logo' => 'img/logo2.png',
])

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

<nav class="relative z-50 flex items-center justify-between px-4 py-4 md:px-10 md:py-8 lg:px-16 lg:py-10">

    {{-- Enlaces desktop --}}
    <div class="hidden lg:flex gap-10 xl:gap-16 font-semibold uppercase text-base xl:text-xl">
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

    {{-- Logo --}}
    <a href="{{ route('home') }}" class="lg:order-none">
        <img src="{{ asset($logo) }}" alt="Up Dream" class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto">
    </a>

    {{-- Botón menú móvil --}}
    <button
        type="button"
        id="mobile-menu-btn"
        aria-label="Abrir menú"
        aria-expanded="false"
        class="lg:hidden flex flex-col justify-center items-center gap-1.5 w-10 h-10 {{ $textColor }}"
    >
        <span class="mobile-menu-bar block w-6 h-0.5 bg-current transition-all duration-300 origin-center"></span>
        <span class="mobile-menu-bar block w-6 h-0.5 bg-current transition-all duration-300 origin-center"></span>
        <span class="mobile-menu-bar block w-6 h-0.5 bg-current transition-all duration-300 origin-center"></span>
    </button>

</nav>

{{-- Menú móvil overlay --}}
<div
    id="mobile-menu"
    class="fixed inset-0 z-40 hidden lg:hidden"
    aria-hidden="true"
>
    <div id="mobile-menu-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

    <div class="absolute top-0 right-0 h-full w-[min(100%,320px)] bg-[#1a1a2e]/95 shadow-2xl flex flex-col pt-24 px-8 pb-10">
        <div class="flex flex-col gap-8 font-semibold uppercase text-lg {{ $textColor }}">
            <a href="{{ route('home') }}"
                class="mobile-menu-link {{ $linkClass }} {{ request()->routeIs('home') ? $activeColor : 'border-transparent' }}">
                Inicio
            </a>
            <a href="{{ route('portafolio') }}"
                class="mobile-menu-link {{ $linkClass }} {{ request()->routeIs('portafolio') ? $activeColor : 'border-transparent' }}">
                Portafolio
            </a>
            <a href="{{ route('servicios') }}"
                class="mobile-menu-link {{ $linkClass }} {{ request()->routeIs('servicios') ? $activeColor : 'border-transparent' }}">
                Servicios
            </a>
            <a href="{{ route('contacto') }}"
                class="mobile-menu-link {{ $linkClass }} {{ request()->routeIs('contacto') ? $activeColor : 'border-transparent' }}">
                Contáctanos
            </a>
        </div>
    </div>
</div>
