<section id="services" class="
        relative
        overflow-hidden
        text-white
        min-h-screen
    "
    style="
        background-image:url('{{ asset('img/backgrounds/brands-bg.webp') }}');
        background-size:100% 100%;
        background-position:center;
        background-repeat:no-repeat;
    ">

    <div class="max-w-7xl mx-auto px-8">

        {{-- ====================================== --}}
        {{-- MARCAS --}}
        {{-- ====================================== --}}
        <div class="pt-12">

            <h2 class="
                    text-center
                    font-bold
                    tracking-[0.2em]
                    uppercase
                "
                style="
                    font-size: clamp(2rem,2.5vw,3rem);
                ">
                Marcas
            </h2>

            <div class="flex justify-center mt-4">

                <div class="
                        bg-orange-500
                        border-2
                        border-white
                        rounded-full
                        px-10
                        py-3
                        font-bold
                        uppercase
                    "
                    style="
                        font-size: clamp(1rem,1.3vw,1.6rem);
                    ">
                    Que han confiado en nosotros
                </div>

            </div>

            {{-- Logos --}}
            <div
                class="
                    mt-16
                    flex
                    justify-center
                    items-center
                    gap-12
                    flex-wrap
                ">

                <img src="{{ asset('img/marcas/vitamina.png') }}" alt="" class="h-[80px] object-contain">

                <img src="{{ asset('img/marcas/salvatier.png') }}" alt="" class="h-[70px] object-contain">

                <img src="{{ asset('img/marcas/susana.png') }}" alt="" class="h-[70px] object-contain">

                <img src="{{ asset('img/marcas/eat.png') }}" alt="" class="h-[70px] object-contain">

                <img src="{{ asset('img/marcas/twin.png') }}" alt="" class="h-[70px] object-contain">

                <span class="
                        text-5xl
                        font-light
                    ">
                    »
                </span>

            </div>

        </div>

        {{-- ====================================== --}}
        {{-- CTA --}}
        {{-- ====================================== --}}
        <div class="
        mt-24
        pb-16
    ">

            <h2 class="
            text-center
            font-bold
            uppercase
            leading-tight
        "
                style="
            font-size: clamp(2.5rem,4vw,5rem);
        ">
                ¿ESTÁS LISTO
                <br>
                PARA ELEVAR TU MARCA?
            </h2>

            <div
                class="
            mt-12
            grid
            grid-cols-[0.7fr_1.3fr]
            gap-10
            items-center
        ">

                {{-- TEXTO --}}
                <div class="max-w-[430px]">

                    <a href="#contacto"
                        class="
                    inline-block
                    bg-orange-500
                    border-2
                    border-white
                    rounded-full
                    px-10
                    py-3
                    font-bold
                    uppercase
                    text-2xl
                ">
                        Contáctanos
                    </a>

                    <p class="
                    mt-8
                    leading-relaxed
                "
                        style="
                    font-size: clamp(1.2rem,1.4vw,1.8rem);
                ">
                        Tu idea ya es genial,
                        solo necesita el impulso correcto.
                    </p>

                    <p class="
                    mt-8
                    leading-relaxed
                "
                        style="
                    font-size: clamp(1.2rem,1.4vw,1.8rem);
                ">
                        Escríbenos y empecemos a crear
                        algo increíble juntos.
                    </p>

                </div>

                {{-- IMAGEN --}}
                <div
                    class="
                relative
                max-w-[950px]
                ml-auto
            ">

                    <img src="{{ asset('img/cta/portatil2.png') }}" alt=""
                        class="
                    w-full
                    h-auto
                ">

                    {{-- LOGO + REDES --}}
                    <div
                        class="
                    flex
                    items-center
                    justify-between
                    mt-4
                    px-4
                ">

                        <img src="{{ asset('img/logo.png') }}" alt="" class="h-12">

                        <div class="flex items-center gap-5">

                            <img src="{{ asset('img/social/tiktok.png') }}" class="h-8">

                            <img src="{{ asset('img/social/instagram.png') }}" class="h-8">

                            <img src="{{ asset('img/social/facebook.png') }}" class="h-8">

                            <img src="{{ asset('img/social/whatsap.png') }}" class="h-8">

                        </div>

                    </div>

                </div>

            </div>

        </div>

</section>
