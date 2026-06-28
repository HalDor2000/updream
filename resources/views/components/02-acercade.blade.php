
<section
    class="relative bg-[#f5f5f5] text-black overflow-hidden
                pt-8 md:pt-12 pb-8 md:pb-0">

    <div class="relative z-20 w-full px-4 sm:px-6 md:pl-28 lg:pl-40 xl:pl-48 md:pr-6">
        <div
            class="flex flex-col items-center text-center
                   w-full max-w-xl mx-auto
                   md:mx-0 md:ml-6 lg:ml-12 xl:ml-16
                   md:items-center md:text-center
                   md:max-w-[min(100%,34rem)] lg:max-w-[min(100%,36rem)] xl:max-w-[38vw]
                   py-8 sm:py-12 md:py-16 lg:py-20">

            <img src="{{ asset('img/logo3.png') }}" alt="Up Dream" class="w-48 sm:w-64 md:w-72 mb-6">

            <p class="text-gray-700 text-sm sm:text-base md:text-lg leading-relaxed mb-8 sm:mb-10 md:mb-12">
                Somos el lugar ideal para darle vida a tus ideas,
                diseñamos marcas que impactan y ofrecemos
                soluciones en marketing digital y redes sociales.
            </p>

            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-blue-600 leading-tight mb-4 md:mb-6">
                ¿Listo para<br>soñar en grande?
            </h2>

            <p class="text-gray-700 text-sm sm:text-base md:text-lg leading-relaxed mb-8 md:mb-10">
                ¡Explora nuestros servicios y descubre
                cómo podemos ayudarte!
            </p>

            <a href="{{ url('/servicios') }}"
                class="inline-flex rounded-full bg-blue-600 px-8 sm:px-12 py-3 sm:py-3.5 text-sm md:text-base font-bold uppercase tracking-wide text-white">
                Servicios
            </a>
        </div>
    </div>

    <!-- IMAGEN: relativa en móvil, absoluta en desktop -->
    <div
        class="relative md:absolute md:top-8 lg:top-12 md:bottom-0 md:right-0
                w-full md:w-[52vw] lg:w-[48vw] xl:w-[46vw]
                flex items-end justify-center md:justify-end pointer-events-none z-10
                -mt-4 sm:-mt-8 md:mt-0 px-2 sm:px-0">
        <img src="{{ asset('img/services/laptop.png') }}" alt=""
            class="max-w-none w-full sm:w-[90vw] md:w-full h-auto object-contain object-center md:object-right-bottom
                   md:translate-x-[6%] lg:translate-x-[8%]
                   -mb-2 sm:-mb-4 md:-mb-10">
    </div>
</section>
