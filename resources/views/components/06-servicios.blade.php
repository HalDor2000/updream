<section id="servicios" class="
        relative
        overflow-hidden
        min-h-[70vh]
        sm:min-h-screen
        text-white
    "
    style="
        background-image:url('{{ asset('img/backgrounds/servicios.webp') }}');
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
    ">

    <x-navbar textColor="text-white"  activeColor="border-white" hoverColor="hover:border-white" logo="img/logo.png" />

    <div
        class="
            relative
            z-10
            flex
            flex-col
            items-center
            text-center
            pt-6
            sm:pt-10
            px-4
            sm:px-6
            pb-12
        ">

        <img src="{{ asset('img/cta/proximo_nivel.svg') }}" alt="Te llevamos al próximo nivel"
            class="
                w-full
                max-w-[950px]
                h-auto
            ">

    </div>

</section>
