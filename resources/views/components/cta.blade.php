<section
    id="cta"
    class="
        relative
        overflow-hidden
        min-h-screen
        bg-[#4d67ea]
        text-white
    "
>

    <!-- GRID FONDO -->
    <div
        class="
            absolute
            inset-0
            opacity-15
            pointer-events-none
        "
        style="
            background-image:
            linear-gradient(rgba(255,255,255,.15) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.15) 1px, transparent 1px);
            background-size: 55px 55px;
        "
    ></div>

    <!-- LINEA NARANJA -->
    <img
        src="{{ asset('img/cta/linea-naranja.png') }}"
        alt=""
        class="
            absolute
            right-0
            top-20
            h-[100vh]
           {{--  opacity-60 --}}
            pointer-events-none
        "
    >

    <!-- NAVBAR -->
    <x-navbar
        textColor="text-white"
        hoverColor="hover:border-white"
        logo="img/logo.png"
    />

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
            min-h-[75vh]
            px-6
        "
    >

        <!-- TEXTO SUPERIOR -->
        <p
            class="
                uppercase
                tracking-[0.20em]
                text-2xl
                md:text-3xl
                mb-6
            "
        >
            TRAIN WITH THE BEST
        </p>

        <!-- TITULO -->
        <div class="relative">

            <!-- ESTRELLA -->
            <img
                src="{{ asset('img/decor/star-orange.png') }}"
                alt=""
                class="
                    absolute
                    -left-16
                    top-4
                    w-24
                "
            >

            <h2
                class="
                    text-6xl
                    md:text-8xl
                    font-bold
                    leading-none
                "
            >
                Te llevamos
                <br>
                al próximo nivel
            </h2>

        </div>

    </div>

</section>