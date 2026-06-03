<section id="inicio"
    class="relative overflow-hidden min-h-screen bg-gradient-to-br from-orange-500 via-purple-500 to-blue-600 text-white">
    <style>
        .hero-nav {
            height: 110px;
            display: flex;
            align-items: center;
            gap: 70px;
            padding: 0 80px;
            position: relative;
            z-index: 2;
        }

        .hero-nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            letter-spacing: 1px;
            font-weight: 500;
            padding-bottom: 10px;
        }

        .hero-nav a.active {
            border-bottom: 4px solid #fff;
        }

        .logo {
            margin-left: auto;
            text-align: center;
            font-family: Georgia, serif;
            font-size: 28px;
            font-weight: 700;
            line-height: 0.8;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding-top: 90px;
        }

        .hero-content p {
            font-size: 30px;
            margin-bottom: 30px;
        }

        .hero-content h1 {
            font-size: 48px;
            line-height: 1.18;
            margin: 0;
            font-weight: 800;
        }

        .hero-content h1 span {
            color: #ff6b1a;
        }

        .hero-content h2 {
            font-size: 31px;
            margin-top: 14px;
            font-weight: 700;
        }

        .hero-pill {
            display: inline-block;
            margin-top: 45px;
            padding: 18px 54px;
            border: 2px solid rgba(255, 255, 255, 0.9);
            border-radius: 999px;
            font-size: 24px;
            line-height: 1.25;
            font-weight: 500;
        }
    </style>

    <!-- GLOW -->
    <div class="absolute inset-0 overflow-hidden -z-0">

        <div
            class="
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

    <x-navbar />

    <!-- HERO -->
    <div class="relative z-10 flex flex-col items-center justify-center text-center pt-40 px-6">

        <p class="text-4xl mb-10">
            Impulsa tu marca al éxito digital
        </p>

        <h1 class="text-7xl md:text-8xl font-bold leading-none">

            Transformación digital
            <br>

            con <span class="text-orange-500">visión</span>

        </h1>

        <p class="text-5xl font-bold mt-12">
            Haz crecer tu marca con estrategias innovadoras
        </p>

        <div
            class="
            mt-12
            border
            border-white/50
            rounded-full
            px-20
            py-8
            text-3xl
            max-w-4xl
            bg-white/5
            backdrop-blur-sm
        ">

            Elevamos tu marca a través de la
            creatividad e ideas que inspiran

        </div>

    </div>

    <div
        class="
        absolute
        bottom-12
        right-16
        flex
        items-center
        gap-4
        text-orange-400
        text-3xl
        font-medium
         ">

        <div class="w-12 h-[2px] bg-white"></div>

        <span>up your</span>

        <span
            class="
            bg-white
            text-blue-600
            px-4
            py-1
            rounded-full
            font-bold
        ">
            brand
        </span>

        <span class="text-3xl text-orange-400 leading-none">✦</span>
        <span class="text-3xl text-orange-400 leading-none">✦</span>

    </div>


</section>
