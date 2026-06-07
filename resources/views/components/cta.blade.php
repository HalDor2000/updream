<section id="services"
    class="
        relative
        overflow-hidden
        min-h-screen
        bg-[#4d67ea]
        text-white
    ">
   <div class="absolute top-0 left-0 w-full h-[2px] bg-white"></div>
    <!-- GRID FONDO -->
    <div class="
            absolute
            inset-0
            opacity-55
            pointer-events-none
        "
        style="
            background-image:
            linear-gradient(rgba(255,255,255,.15) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.15) 1px, transparent 1px);
            background-size: 75px 100px;
        ">
    </div>

    <!-- LINEA NARANJA -->
    {{--  <img
        src="{{ asset('img/cta/linea-naranja.png') }}"
        alt=""
        class="
            absolute
            right-0
            top-0
            h-[100vh]
            pointer-events-none
        "
    > --}}
    <img src="{{ asset('img/cta/linea-naranja.png') }}" alt=""
        class="
        absolute
        right-[-1%]
        top-[-11%]
        w-[100vw]
        
        max-w-none
               h-auto
        pointer-events-none
    ">

    <!-- NAVBAR -->
    <x-navbar textColor="text-white" hoverColor="hover:border-white" logo="img/logo.png" />

    <!-- CONTENIDO -->
    <div
        class="
        relative
        z-10
        flex
        flex-col
        items-center
        justify-start
        text-center
        {{-- min-h-[55vh] --}}
        pt-10
        px-6
    ">


        <!-- TITULO SVG -->
        <div class="relative flex flex-col items-center">


           <img
    src="{{ asset('img/cta/proximo_nivel.svg') }}"
    alt="Te llevamos al próximo nivel"
    class="
        w-[57vw]
        max-w-[950px]
        min-w-[450px]
        h-auto
    "
>

        </div>

    </div>

    </div>

</section>
