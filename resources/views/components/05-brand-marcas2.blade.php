<section>

    <!-- ===================== -->
    <!-- MARCAS -->
    <!-- ===================== -->
    <div class="bg-[#4966ea] text-white py-16">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="font-heading text-center text-5xl font-bold tracking-[0.15em] mb-4">
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

            <div class="overflow-hidden relative">

                <div class="flex items-center gap-16 animate-marcas whitespace-nowrap">

                    <img src="{{ asset('img/marcas/vitamina.png') }}" class="h-24 object-contain">
                    <img src="{{ asset('img/marcas/salvatier.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/susana.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/eat.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/twin.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/sofi.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/frozen.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/layco.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/tristate.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/fisiobienestar.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/summit.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/vuelvo.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/ceviche.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/sinmedida.png') }}" class="h-20 object-contain">
                    {{-- DUPLICADAS PARA LOOP --}}
                    <img src="{{ asset('img/marcas/vitamina.png') }}" class="h-24 object-contain">
                    <img src="{{ asset('img/marcas/salvatier.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/susana.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/eat.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/twin.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/sofi.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/frozen.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/layco.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/tristate.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/fisiobienestar.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/summit.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/vuelvo.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/ceviche.png') }}" class="h-20 object-contain">
                    <img src="{{ asset('img/marcas/sinmedida.png') }}" class="h-20 object-contain">
                </div>

            </div>

        </div>

    </div>

    <!-- ===================== -->
    <!-- CTA -->
    <!-- ===================== -->
    <div
        class="
            py-24
            text-white
            bg-gradient-to-r
            from-orange-500
            via-[#b96da8]
            to-[#4966ea]
        ">

        <div class="max-w-4xl mx-auto text-center">

            <div class="text-4xl mb-8">
                ✦
            </div>

            <h2 class="text-5xl font-bold uppercase tracking-wide leading-tight">

                ¿Estás listo
                <br>
                para elevar tu marca?

            </h2>

            <a href="#contacto"
                class="
                    inline-block
                    mt-10
                    px-10
                    py-3
                    bg-orange-500
                    border-2
                    border-white
                    rounded-full
                    text-2xl
                    font-bold
                    uppercase
                    hover:scale-105
                    transition
                ">
                Contáctanos
            </a>

            <div class="flex justify-center items-center gap-6 mt-10">

                <a href="#" target="_blank">
                    <img src="{{ asset('img/social/tiktok.png') }}" alt="TikTok"
                        class="h-10 w-10 hover:scale-110 transition">
                </a>

                <a href="#" target="_blank">
                    <img src="{{ asset('img/social/instagram.png') }}" alt="Instagram"
                        class="h-10 w-10 hover:scale-110 transition">
                </a>

                <a href="#" target="_blank">
                    <img src="{{ asset('img/social/facebook.png') }}" alt="Facebook"
                        class="h-10 w-10 hover:scale-110 transition">
                </a>

                <a href="#" target="_blank">
                    <img src="{{ asset('img/social/whatsap.png') }}" alt="WhatsApp"
                        class="h-10 w-10 hover:scale-110 transition">
                </a>

            </div>

        </div>

    </div>
    
    <style>
        @keyframes marcas {

            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marcas {

            width: max-content;

            animation: marcas 30s linear infinite;
        }
    </style>
</section>
