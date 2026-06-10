
<section
    class="relative bg-[#f5f5f5] text-black overflow-hidden
                pt-8 md:pt-12 pb-0
                min-h-[620px] sm:min-h-[680px] md:min-h-[760px] lg:min-h-[900px]">

    <!-- Solo texto dentro del contenedor centrado -->
    <div class="relative z-20 w-full pl-6 md:pl-28 lg:pl-40 xl:pl-48 pr-6">
        <div
            class="order-2 md:order-1 flex flex-col items-center text-center
                   w-full max-w-xl mx-auto
                   md:mx-0 md:ml-6 lg:ml-12 xl:ml-16
                   md:items-center md:text-center
                   md:max-w-[min(100%,34rem)] lg:max-w-[min(100%,36rem)] xl:max-w-[38vw]
                   py-12 md:py-16 lg:py-20">

            <img src="{{ asset('img/logo3.png') }}" alt="Up Dream" class="w-64 md:w-72 mb-6">

            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-10 md:mb-12">
                Somos el lugar ideal para darle vida a tus ideas,
                diseñamos marcas que impactan y ofrecemos
                soluciones en marketing digital y redes sociales.
            </p>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-blue-600 leading-tight mb-4 md:mb-6">
                ¿Listo para<br>soñar en grande?
            </h2>

            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-8 md:mb-10">
                ¡Explora nuestros servicios y descubre
                cómo podemos ayudarte!
            </p>

            <a href="{{ url('/servicios') }}"
                class="inline-flex rounded-full bg-blue-600 px-12 py-3.5 text-sm md:text-base font-bold uppercase tracking-wide text-white">
                Servicios
            </a>
        </div>
    </div>

    <!-- IMAGEN: pegada abajo/derecha; altura de sección evita cortar la estrella -->
    <div
        class="absolute top-8 md:top-12 bottom-0 right-0
                w-[92vw] sm:w-[80vw] md:w-[52vw] lg:w-[48vw] xl:w-[46vw]
                flex items-end justify-end pointer-events-none z-10">
        <img src="{{ asset('img/services/laptop.png') }}" alt=""
            class="max-w-none w-full h-auto object-contain object-right-bottom
                   translate-x-[4%] md:translate-x-[6%] lg:translate-x-[8%]
md:w-[46vw]
                   -mb-6 md:-mb-10">
    </div>
</section>
