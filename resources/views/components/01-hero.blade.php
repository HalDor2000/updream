<section id="inicio" class="
        relative
        overflow-hidden
        min-h-screen
        text-white
    "
    style="
        background-image:url('{{ asset('img/hero/hero-bg.webp') }}');
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
    ">

    <!-- GLOW -->
    <div class="absolute inset-0 overflow-hidden -z-10">
        <div
            class="
                absolute
                w-[280px]
                h-[280px]
                sm:w-[400px]
                sm:h-[400px]
                md:w-[550px]
                md:h-[550px]
                lg:w-[700px]
                lg:h-[700px]
                bg-fuchsia-500/30
                blur-3xl
                rounded-full
                top-1/2
                left-1/2
                -translate-x-1/2
                -translate-y-1/2
            ">
        </div>
    </div>

    <!-- NAVBAR -->
    <x-navbar textColor="text-white"  activeColor="border-white" hoverColor="hover:border-white" logo="img/logo.png" />

    <!-- CONTENIDO -->
    <div
        class="
            relative
            z-10
            flex
            flex-col
            items-center
            justify-center
            text-center
            min-h-[60vh]
            sm:min-h-[70vh]
            max-w-6xl
            mx-auto
            px-4
            sm:px-6
            pb-24
            sm:pb-0
        ">

        <!-- TEXTO SUPERIOR -->
        <p class="mb-4 sm:mb-6 text-base sm:text-xl md:text-2xl">
            Impulsa tu marca al éxito digital
        </p>

        <!-- TITULO -->
        <h1 class="
            font-bold
            leading-none
            max-w-[1200px]
            mx-auto
            text-4xl
            sm:text-5xl
            md:text-6xl
            lg:text-7xl
        ">
            Transformación digital
            <br>
            con <span class="text-orange-500">visión</span>
        </h1>

        <!-- SUBTITULO -->
        <p class="font-bold mt-2 text-xl sm:text-2xl md:text-3xl lg:text-4xl px-2">
            Haz crecer tu marca con estrategias innovadoras
        </p>

        <!-- PILL -->
        <div
            class="
                mt-6
                sm:mt-8
                border
                border-white
                rounded-full
                mx-auto
                w-full
                max-w-[700px]
                px-5
                sm:px-10
                md:px-14
                py-4
                sm:py-6
            ">
            <p class="text-center leading-tight text-base sm:text-lg md:text-xl lg:text-2xl">
                Elevamos tu marca a través de la
                <br class="hidden sm:block">
                <span class="sm:hidden"> </span>
                creatividad e ideas que inspiran
            </p>
        </div>

    </div>

    <!-- UP YOUR BRAND -->
    <img src="{{ asset('img/hero/up-your-brand.svg') }}" alt="Up your brand"
        class="
            absolute
            right-2
            sm:right-[2vw]
            bottom-3
            sm:bottom-5
            w-[140px]
            sm:w-[clamp(180px,16vw,380px)]
            h-auto
            z-10
            opacity-80
            sm:opacity-100
        ">

</section>
