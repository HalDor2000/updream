<footer id="contacto" class="
        relative
        overflow-hidden
        min-h-screen
        text-white
    "
    style="
        background-image:url('{{ asset('img/hero/hero-bg.webp') }}');
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
    ">

    {{-- LINEA SUPERIOR --}}
    <div class="absolute top-0 left-0 w-full h-[2px] bg-white"></div>

    {{-- NAVBAR --}}
    <x-navbar textColor="text-white"  activeColor="border-white" hoverColor="hover:border-white" logo="img/logo.png" />

    <div
        class="
            max-w-7xl
            mx-auto
            px-4
            sm:px-8
            pt-8
            sm:pt-16
            pb-10
        ">

        <div
            class="
                grid
                lg:grid-cols-2
                gap-10
                sm:gap-16
                items-center
            ">

            {{-- IZQUIERDA --}}
            <div class="hidden sm:block">

                <img src="{{ asset('img/footer/proximo_nivel_footer.webp') }}" alt="Próximo Nivel"
                    class="
                        w-full
                        max-w-[700px]
                        mx-auto
                        lg:mx-0
                    ">

            </div>

            {{-- FORMULARIO --}}
            <div
                class="
                    bg-[#ececec]
                    rounded-[24px]
                    sm:rounded-[40px]
                    lg:rounded-[50px]
                    p-6
                    sm:p-8
                    lg:p-10
                    text-black
                ">

                <h2
                    class="
                        text-[#4966ea]
                        text-3xl
                        sm:text-4xl
                        lg:text-5xl
                        font-bold
                        mb-6
                        sm:mb-8
                    ">
                    Contáctanos
                </h2>

                @if ($errors->any())

                    <div class="mb-4 rounded-lg bg-red-500 text-white px-4 py-3 text-sm sm:text-base">

                        <ul class="list-disc ml-4">

                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>

                    </div>

                @endif

                @if (session('success'))
                    <div
                        class="
                            mb-4
                            rounded-lg
                            bg-green-500
                            text-white
                            px-4
                            py-3
                            text-sm
                            sm:text-base
                        ">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf

                    <div class="mb-5">

                        <label
                            class="
                                block
                                text-[#4966ea]
                                font-bold
                                mb-2
                                text-sm
                                sm:text-base
                            ">
                            Nombre
                        </label>

                        <input type="text"
                            class="
                                w-full
                                rounded-full
                                bg-white
                                px-4
                                sm:px-5
                                py-2.5
                                sm:py-3
                                text-sm
                                sm:text-base
                            "
                            name="nombre">

                    </div>

                    <div
                        class="
                            grid
                            grid-cols-1
                            sm:grid-cols-2
                            gap-4
                            sm:gap-5
                            mb-5
                        ">

                        <div>

                            <label
                                class="
                                    block
                                    text-[#4966ea]
                                    font-bold
                                    mb-2
                                    text-sm
                                    sm:text-base
                                ">
                                Teléfono
                            </label>

                            <input type="text"
                                class="
                                    w-full
                                    rounded-full
                                    bg-white
                                    px-4
                                    sm:px-5
                                    py-2.5
                                    sm:py-3
                                    text-sm
                                    sm:text-base
                                "
                                name="telefono">

                        </div>

                        <div>

                            <label
                                class="
                                    block
                                    text-[#4966ea]
                                    font-bold
                                    mb-2
                                    text-sm
                                    sm:text-base
                                ">
                                Email
                            </label>

                            <input type="email"
                                class="
                                    w-full
                                    rounded-full
                                    bg-white
                                    px-4
                                    sm:px-5
                                    py-2.5
                                    sm:py-3
                                    text-sm
                                    sm:text-base
                                "
                                name="email">

                        </div>

                    </div>

                    <div>

                        <label
                            class="
                                block
                                text-[#4966ea]
                                font-bold
                                mb-2
                                text-sm
                                sm:text-base
                            ">
                            Mensaje
                        </label>

                        <textarea rows="5"
                            class="
                                w-full
                                rounded-[20px]
                                sm:rounded-[30px]
                                bg-white
                                px-4
                                sm:px-5
                                py-3
                                sm:py-4
                                text-sm
                                sm:text-base
                            "
                            name="mensaje"></textarea>

                    </div>

                    <div
                        class="
                            flex
                            justify-end
                            items-center
                            gap-3
                            mt-6
                        ">

                        <span
                            class="
                                text-[#ff5b12]
                                text-xl
                                sm:text-2xl
                            ">
                            ✦
                        </span>

                        <button type="submit"
                            class="
                                bg-[#4966ea]
                                text-white
                                px-6
                                sm:px-8
                                py-2
                                rounded-full
                                uppercase
                                text-sm
                                sm:text-base
                            ">
                            Enviar
                        </button>

                    </div>

                </form>

            </div>

        </div>

        {{-- PIE INFERIOR --}}
        <div
            class="
                flex
                flex-col
                sm:flex-row
                justify-between
                items-center
                sm:items-end
                gap-6
                mt-10
            ">

            {{-- UP YOUR BRAND --}}
            <img src="{{ asset('img/hero/up-your-brand.svg') }}" alt=""
                class="
                    h-10
                    sm:h-12
                    object-contain
                ">

            {{-- REDES --}}
            <div
                class="
                    flex
                    items-center
                    gap-4
                    sm:gap-6
                ">

                <a href="#">
                    <img src="{{ asset('img/social/tiktok.png') }}" class="h-8 w-8 sm:h-10 sm:w-10">
                </a>

                <a href="#">
                    <img src="{{ asset('img/social/instagram.png') }}" class="h-8 w-8 sm:h-10 sm:w-10">
                </a>

                <a href="#">
                    <img src="{{ asset('img/social/facebook.png') }}" class="h-8 w-8 sm:h-10 sm:w-10">
                </a>

                <a href="#">
                    <img src="{{ asset('img/social/whatsap.png') }}" class="h-8 w-8 sm:h-10 sm:w-10">
                </a>

            </div>

        </div>

    </div>

</footer>
