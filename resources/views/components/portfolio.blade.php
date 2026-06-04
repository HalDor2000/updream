<section id="portfolio" class="relative overflow-hidden min-h-screen bg-[#f6f6f3] text-black  pb-40">

    {{-- NAVBAR --}}
    <x-navbar textColor="text-[#4966ea]" hoverColor="hover:border-orange-500" logo="img/logo-azul.png" />

    {{-- CONTENIDO --}}
    <div class="max-w-7xl mx-auto px-6 pt-16">

        {{-- TITULO --}}
        <div class="relative mb-16 flex flex-col items-center">

            {{-- Estrella --}}
            <img src="{{ asset('img/decor/star-orange.png') }}" alt=""
                class="
                    absolute
                    left-[180px]
                    top-[-20px]
                    w-16
                ">

            <h2
                class="
                    font-heading
                    text-[72px]
                    font-bold
                    text-[#4966ea]
                    leading-none
                ">
                Nuestros
            </h2>

            <div
                class="
                    -mt-2
                    rounded-[24px]
                    bg-[#ff6b0a]
                    px-8
                    py-1
                    rotate-[-3deg]
                ">

                <span
                    class="
                        text-[52px]
                        font-bold
                        text-white
                    ">
                    proyectos
                </span>

            </div>

        </div>

        {{-- CONTENEDOR AZUL --}}
        <div
            class="
                relative
                rounded-[12px]
                bg-[#3f56c8]
                p-8
            ">

            {{-- FLECHA IZQUIERDA --}}
            <button
                class="
                    absolute
                    left-4
                    top-1/2
                    -translate-y-1/2
                    text-5xl
                    text-white
                ">
                ‹
            </button>

            {{-- IMAGEN --}}
            <div class="flex justify-center">

                <div class="flex w-full max-w-[1050px] overflow-hidden rounded-md">

                    <img src="{{ asset('img/portfolio/susanaportfolio.png') }}" alt="Susana Soriano"
                        class="w-1/2 object-cover">

                    <img src="{{ asset('img/portfolio/eatnutritionportfolio.png') }}" alt="Eat Nutrition"
                        class="w-1/2 object-cover">

                </div>

            </div>

            {{-- BARRA INFERIOR --}}
            <div
                class="
                    mt-6
                    rounded-lg
                    bg-[#3048b8]
                    px-4
                    py-3
                ">

                <div class="flex items-center gap-4">

                    <span class="text-sm text-white">
                        4-5 / 20
                    </span>

                    <div
                        class="
                            h-1
                            flex-1
                            rounded
                            bg-[#7c8ee7]
                        ">

                        <div
                            class="
                                h-full
                                w-[25%]
                                rounded
                                bg-white
                            ">
                        </div>

                    </div>

                </div>

            </div>

            {{-- FLECHA DERECHA --}}
            <button
                class="
                    absolute
                    right-4
                    top-1/2
                    -translate-y-1/2
                    text-5xl
                    text-white
                ">
                ›
            </button>

        </div>

    </div>

    {{-- ESTRELLA INFERIOR --}}
    <img src="{{ asset('img/decor/star-orange.png') }}" alt=""
        class="
            absolute
            bottom-8
            right-8
            w-28
        ">

</section>
