<section id="portafolio" class="relative overflow-hidden min-h-screen bg-[#f6f6f3] text-black pb-20 sm:pb-40">

    {{-- NAVBAR --}}
    <x-navbar textColor="text-[#4966ea]" activeColor="border-orange-500" hoverColor="hover:border-orange-500" logo="img/logo-azul.png" />

    {{-- CONTENIDO --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-4 sm:pt-8">

      {{-- TITULO SVG --}}
        <div class="mb-8 sm:mb-14 flex justify-center">

            <img
                src="{{ asset('img/portfolio/nuestros_proyectos.svg') }}"
                alt="Nuestros proyectos"
                class="
                    w-[260px]
                    sm:w-[420px]
                    md:w-[520px]
                    lg:w-[620px]
                    xl:w-[700px]
                    h-auto
                ">

        </div>

        {{-- CONTENEDOR AZUL --}}
        <div
            class="
                relative
                rounded-[12px]
                bg-[#3f56c8]
                p-4
                sm:p-6
                md:p-8
            ">

            {{-- FLECHA IZQUIERDA --}}
            <button
                class="
                    absolute
                    left-1
                    sm:left-4
                    top-1/2
                    -translate-y-1/2
                    text-3xl
                    sm:text-5xl
                    text-white
                    z-10
                    p-1
                ">
                ‹
            </button>

            {{-- IMAGEN --}}
            <div class="flex justify-center px-8 sm:px-10 md:px-12">

                <div class="flex flex-col sm:flex-row w-full max-w-[1050px] overflow-hidden rounded-md">

                    <img src="{{ asset('img/portfolio/susanaportfolio.png') }}" alt="Susana Soriano"
                        class="w-full sm:w-1/2 object-cover">

                    <img src="{{ asset('img/portfolio/eatnutritionportfolio.png') }}" alt="Eat Nutrition"
                        class="w-full sm:w-1/2 object-cover">

                </div>

            </div>

            {{-- BARRA INFERIOR --}}
            <div
                class="
                    mt-4
                    sm:mt-6
                    rounded-lg
                    bg-[#3048b8]
                    px-3
                    sm:px-4
                    py-2
                    sm:py-3
                ">

                <div class="flex items-center gap-3 sm:gap-4">

                    <span class="text-xs sm:text-sm text-white whitespace-nowrap">
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
                    right-1
                    sm:right-4
                    top-1/2
                    -translate-y-1/2
                    text-3xl
                    sm:text-5xl
                    text-white
                    z-10
                    p-1
                ">
                ›
            </button>

        </div>

    </div>

</section>
