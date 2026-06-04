<style>
    .gradient-bg {
        background: linear-gradient(135deg, #FF4500 0%, #6A5ACD 50%, #4169E1 100%);
        background-attachment: fixed;
        
    }
</style>
<section>
    <!--=====================-->
    <!-- MARCAS -->
    <!-- ===================== -->
    <div class="bg-[#4966ea] text-white py-16">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="font-heading text-center text-[56px] font-semibold tracking-[0.20em] mb-4">
                MARCAS
            </h2>

            <div class="flex justify-center mb-14">

                <div
                    class="
                        bg-orange-500
                        border-2
                        border-white
                        rounded-full
                        px-10
                        py-3
                        text-2xl
                        font-bold
                        uppercase
                        tracking-wide
                    ">
                    Que han confiado en nosotros
                </div>

            </div>

            <div class="flex items-center justify-center gap-16">

                <img src="{{ asset('img/marcas/vitamina.png') }}" alt="Vitamina Mental" class="h-24 object-contain">

                <img src="{{ asset('img/marcas/salvatier.png') }}" alt="Salvatier" class="h-20 object-contain">

                <img src="{{ asset('img/marcas/susana.png') }}" alt="Susana Soriano" class="h-20 object-contain">

                <img src="{{ asset('img/marcas/eat.png') }}" alt="Eat Nutrition" class="h-20 object-contain">

                <img src="{{ asset('img/marcas/twin.png') }}" alt="Twins Garage" class="h-20 object-contain">

                <button
                    class="
                        text-5xl
                        font-light
                        hover:text-orange-300
                        transition
                        cursor-pointer
                    ">
                    »
                </button>

            </div>

        </div>

    </div>

    <!-- CONTACT SECTION -->
  {{--   <div
        class="
        relative
        overflow-hidden
        py-12
        text-white
        bg-gradient-to-r
        from-orange-500
        via-[#9f76c4]
        to-[#4966ea]
      "> --}}

       <div
        class="gradient-bg
        relative
        overflow-hidden
        py-12
        text-white
       
      ">

        <!-- DECORACION IZQUIERDA -->
        <img src="{{ asset('img/cta/lineas2.png') }}" alt=""
            class="
            absolute
            left-0
            bottom-0
            h-[440px]
            opacity-90
        ">

        <div class="max-w-6xl mx-auto px-8 relative z-10">

            <!-- TITULO -->
            <div class="text-center mb-6">

                <h2
                    class="
                    text-3xl
                    md:text-5xl
                    font-bold
                    uppercase
                    tracking-wider
                    leading-tight
                ">
                    ¿ESTÁS LISTO
                    <br>
                    PARA ELEVAR TU MARCA?
                </h2>

            </div>

            <!-- CONTENIDO -->
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <!-- IZQUIERDA -->
                <div>

                    <a href="#contacto"
                        class="
                        inline-block
                        bg-orange-500
                        border-2
                        border-white
                        rounded-full
                        px-12
                        py-3
                        font-bold
                        text-2xl
                        hover:scale-105
                        transition
                    ">
                        CONTÁCTANOS
                    </a>

                    <div class="max-w-[460px]">
                        <p class="mt-4 text-3xl leading-9 ">
                            Tu idea ya es genial, solo necesita
                            el impulso correcto.
                        </p>

                        <p class="mt-8 text-3xl leading-9">
                            Escríbenos y empecemos a crear
                            algo increíble juntos.
                        </p>
                    </div>

                </div>

                <!-- DERECHA -->
                <div class="relative">

                    <!-- FOTO -->
                    <div class="overflow-hidden max-w-[580px] shadow-lg">
                        <img src="{{ asset('img/cta/portatil2.png') }}" alt="Up Dream" class="block w-full">
                    </div>



                    <!-- PIE -->
                    <div
                        class="
                        flex
                        items-center
                        gap-4
                        mt-4
                    ">

                        <img src="{{ asset('img/logo2.png') }}" alt="Up Dream" class="h-14">

                        <div
                            class="
                            w-40
                            h-[2px]
                            bg-white
                            opacity-70
                        ">
                        </div>

                        <img src="{{ asset('img/social/tiktok.png') }}" alt="TikTok"
                            class="h-6 hover:scale-110 transition">

                        <img src="{{ asset('img/social/instagram.png') }}" alt="Instagram"
                            class="h-6 hover:scale-110 transition">

                        <img src="{{ asset('img/social/facebook.png') }}" alt="Facebook"
                            class="h-6 hover:scale-110 transition">

                        <img src="{{ asset('img/social/whatsap.png') }}" alt="WhatsApp"
                            class="h-6 hover:scale-110 transition">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
