<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up Dream</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<section class="relative overflow-hidden min-h-screen bg-gradient-to-br from-orange-500 via-purple-500 to-blue-600 text-white">

    <!-- GLOW -->
    <div class="absolute inset-0 overflow-hidden -z-0">

        <div class="
            absolute
            w-[700px]
            h-[700px]
            bg-fuchsia-500/30
            blur-3xl
            rounded-full
            top-1/2
            left-1/2
            -translate-x-1/2
            -translate-y-1/2
        ">
        </div>

    </div>

    <!-- NAVBAR -->
    <nav class="relative z-10 flex items-center justify-between px-10 py-6">

        <div class="flex gap-10 font-semibold uppercase text-sm">

            <a href="#" class="border-b-4 border-white pb-1 hover:text-orange-300 transition">
                Inicio
            </a>

            <a href="#" class="hover:text-orange-300 transition">
                Portafolio
            </a>

            <a href="#" class="hover:text-orange-300 transition">
                Servicios
            </a>

            <a href="#" class="hover:text-orange-300 transition">
                Contáctanos
            </a>

        </div>

        <div class="text-4xl font-bold leading-8">
            up <br> Dream
        </div>

    </nav>

    <!-- HERO -->
    <div class="relative z-10 flex flex-col items-center justify-center text-center pt-20 px-6">

        <p class="text-2xl mb-8">
            Impulsa tu marca al éxito digital
        </p>

        <h1 class="text-6xl md:text-8xl font-bold leading-tight">

            Transformación digital
            <br>

            con <span class="text-orange-400">visión</span>

        </h1>

        <p class="text-3xl font-semibold mt-10">
            Haz crecer tu marca con estrategias innovadoras
        </p>

        <div class="
            mt-12
            border
            border-white/50
            rounded-full
            px-14
            py-6
            text-2xl
            max-w-3xl
            bg-white/5
            backdrop-blur-sm
        ">

            Elevamos tu marca a través de la
            creatividad e ideas que inspiran

        </div>

    </div>

</section>

</body>

</html>