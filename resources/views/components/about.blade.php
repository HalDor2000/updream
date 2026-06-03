<section class="bg-[#f5f5f5] text-black py-24 px-6 md:px-10 overflow-hidden">

    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-8 items-center">

        <!-- TEXTO -->
        <div class="order-2 md:order-1 max-w-md flex flex-col justify-center">

            <!-- LOGO -->
            <img
                src="{{ asset('img/logo.png') }}"
                alt="Up Dream"
                class="w-60 mb-6"
            >


            <p class="text-gray-700 leading-6 mb-12">
                Somos el lugar ideal para darle vida a tus ideas,
                diseñamos marcas que impactan y ofrecemos
                soluciones en marketing digital y redes sociales.
            </p>

            <h2 class="text-4xl font-bold text-blue-600 leading-tight mb-4">
                ¿Listo para
                <br>
                soñar en grande?
            </h2>

            <p class="text-gray-700 leading-6 mb-8">
                ¡Explora nuestros servicios y descubre
                cómo podemos ayudarte!
            </p>

            <a
                href="#services"
                class="
                    inline-block
                    bg-blue-600
                    hover:bg-blue-700
                    text-white
                    px-8
                    py-3
                    rounded-full
                    font-semibold
                    transition
                    w-fit
                "
            >
                SERVICIOS
            </a>

        </div>

        <!-- IMAGEN -->
        <div class="relative order-1 md:order-2 flex justify-center">

            <!-- DECORACIÓN NARANJA -->
            <div
                class="
                    absolute
                    w-[350px]
                    h-[350px]
                    border-[25px]
                    border-orange-500
                    rounded-full
                    -bottom-16
                    right-0
                    opacity-80
                    z-0
                ">
            </div>

            <img
                src="{{ asset('img/services/laptop.png') }}"
                alt="Up Dream"
                class="
                    relative
                    z-10
                    w-full
                    max-w-3xl
                    object-contain
                "
            >

        </div>

    </div>

</section>