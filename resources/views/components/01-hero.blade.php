<section id="inicio" class="
        relative
        overflow-hidden
        min-h-screen
        text-white
    "
    style="
        background-image:url('{{ asset('img/hero/hero-bg.webp') }}');
        background-size:100% 100%;
        background-position:center;
        background-repeat:no-repeat;
    ">

    <!-- GLOW -->
    <div class="absolute inset-0 overflow-hidden -z-10">
        <div
            class="
                absolute
                w-[400px]
                h-[400px]
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
            min-h-[70vh]
            max-w-6xl
            mx-auto
            px-6
        ">

        <!-- TEXTO SUPERIOR -->
        <p class="mb-6" style="
        font-size: clamp(1.25rem, 1.8vw, 2.2rem);
    ">
            Impulsa tu marca al éxito digital
        </p>

        <!-- TITULO -->
        <h1 class="
        font-bold
        leading-none
        max-w-[1200px]
        mx-auto
    "
            style="
        font-size: clamp(2.8rem, 4.5vw, 5.5rem);
    ">
            Transformación digital
            <br>
            con <span class="text-orange-500">visión</span>
        </h1>

        <!-- SUBTITULO -->
        <p class="font-bold mt-2" style="
        font-size: clamp(1.8rem, 2.5vw, 3.5rem);
    ">
            Haz crecer tu marca con estrategias innovadoras
        </p>

        <!-- PILL -->
        <div
            class="
        mt-8
        border
        border-white
        rounded-full
        mx-auto
        w-[clamp(500px,38vw,700px)]
        px-14
        py-6
    ">
            <p class="text-center leading-tight" style="
            font-size: clamp(1.4rem, 1.8vw, 2.2rem);
        ">
                Elevamos tu marca a través de la
                <br>
                creatividad e ideas que inspiran
            </p>
        </div>

    </div>

    <!-- UP YOUR BRAND -->
    <img src="{{ asset('img/hero/up-your-brand.svg') }}" alt="Up your brand"
        class="
            absolute
            right-[2vw]
            bottom-5
            w-[clamp(220px,16vw,380px)]
            h-auto
            z-10
        ">

</section>
