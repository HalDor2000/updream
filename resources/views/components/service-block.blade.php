@props([
    'image',
    'titleImage' => null,

    'titleLine1' => null,
    'titleLine2' => null,
    'titleLine3' => null,

    'titleClass1' => '',
    'titleClass2' => '',
    'titleClass3' => '',

    'imagePosition' => 'left',
    'imageAlt' => '',
])

@php
    $imageFirst = $imagePosition === 'left';

    $imageOrder = $imageFirst
        ? 'lg:order-1'
        : 'lg:order-2';

    $contentOrder = $imageFirst
        ? 'lg:order-2'
        : 'lg:order-1';

    $contentAlign = $imageFirst
        ? 'lg:items-end lg:text-right'
        : 'lg:items-start lg:text-left';

    $buttonAlign = $imageFirst
        ? 'lg:justify-end'
        : 'lg:justify-start';
@endphp

<div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">

    {{-- IMAGEN --}}
    <div class="{{ $imageOrder }} flex justify-center">

        <img
            src="{{ asset($image) }}"
            alt="{{ $imageAlt }}"
            class="w-full max-w-[460px] object-contain md:max-w-[520px]"
        >

    </div>

    {{-- CONTENIDO --}}
    <div class="{{ $contentOrder }} flex flex-col {{ $contentAlign }}">

        {{-- TITULO COMO IMAGEN --}}
        @if($titleImage)

            <img
                src="{{ asset($titleImage) }}"
                alt="{{ $imageAlt }}"
                class="
                    mb-8
                    w-full
                    max-w-[700px]
                    h-auto
                "
            >

        {{-- TITULO NORMAL --}}
        @else

            <h2
                class="
                    mb-8
                    w-fit
                    font-heading
                    uppercase
                    text-[#4966ea]
                    leading-[1.05]
                "
            >

                <span class="{{ $titleClass1 }}">
                    {{ $titleLine1 }}
                </span>

                @if($titleLine2)
                    <br>
                    <span class="{{ $titleClass2 }}">
                        {{ $titleLine2 }}
                    </span>
                @endif

                @if($titleLine3)
                    <br>
                    <span class="{{ $titleClass3 }}">
                        {{ $titleLine3 }}
                    </span>
                @endif

            </h2>

        @endif

        {{-- TEXTO --}}
        <div
            class="
                max-w-[540px]
                space-y-7
                text-justify
                text-[18px]
                font-medium
                leading-[1.45]
                text-black
                md:text-[20px]
            "
        >
            {{ $slot }}
        </div>

        {{-- BOTON --}}
        <div
            class="
                mt-10
                flex
                items-center
                gap-3
                {{ $buttonAlign }}
                w-full
                max-w-[540px]
            "
        >

            <span class="text-[28px] leading-none text-[#ff5b12]">
                ✦
            </span>

            <a
                href="#contacto"
                class="
                    inline-flex
                    items-center
                    rounded-full
                    bg-[#4966ea]
                    px-7
                    py-2
                    text-[18px]
                    font-medium
                    uppercase
                    tracking-[0.12em]
                    text-white
                    transition
                    hover:bg-[#3454d8]
                "
            >
                Contáctanos
            </a>

        </div>

    </div>

</div>