@props([
    'textColor' => 'text-white',
    'lineColor' => 'border-white',
    'hoverColor' => 'hover:border-white',
    'logo' => 'img/logo2.png',
])

<nav class="relative z-10 flex items-center justify-between px-16 py-10">

    <div class="flex gap-16 font-semibold uppercase text-xl">

        <a href="#inicio"
            class="
                {{ $textColor }}
                border-b-4
                border-transparent
                pb-1
                transition-all
                duration-300
                {{ $hoverColor }}
            ">
            Inicio
        </a>

        <a href="#portfolio"
            class="
                {{ $textColor }}
                border-b-4
                border-transparent
                pb-1
                transition-all
                duration-300
                {{ $hoverColor }}
            ">
            Portafolio
        </a>

        <a href="#services"
            class="
                {{ $textColor }}
                border-b-4
                border-transparent
                pb-1
                transition-all
                duration-300
                {{ $hoverColor }}
            ">
            Servicios
        </a>

        <a href="#contacto"
            class="
                {{ $textColor }}
                border-b-4
                border-transparent
                pb-1
                transition-all
                duration-300
                {{ $hoverColor }}
            ">
            Contáctanos
        </a>

    </div>

    <img
        src="{{ asset($logo) }}"
        alt="Up Dream"
        class="h-20 md:h-28 w-auto">

</nav>