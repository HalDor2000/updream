<section id="inicio" class="hero-gradient relative overflow-hidden min-h-screen text-white">


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
            position: relative;
            color: white;
        }

        .hero-nav a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 4px;
            background: white;
            transition: width .25s ease;
        }

        .hero-nav a:hover::after {
            width: 100%;
        }

        .hero-nav a.active::after {
            width: 100%;
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

        .hero-gradient {
            background:
                radial-gradient(circle at 20% 20%,
                    rgba(255, 90, 0, .75) 0%,
                    transparent 40%),

                radial-gradient(circle at 50% 50%,
                    rgba(186, 85, 255, .50) 0%,
                    transparent 45%),

                radial-gradient(circle at 85% 40%,
                    rgba(65, 110, 242, .85) 0%,
                    transparent 50%),

                linear-gradient(135deg,
                    #f24b0f,
                    #6c69bf,
                    #416ef2);
        }
    </style>


    <!-- GLOW -->
    <div class="absolute inset-0 overflow-hidden -z-0">

        <div
            class="
    absolute
    w-[400px]
    h-[400px]
    md:w-[550px]
    md:h-[550px]
    lg:w-[700px]
    lg:h-[700px]
    bg-fuchsia-500/30
    blur-3xl
    rounded-full
    top-1/2
    left-1/2
    -translate-x-1/2
    -translate-y-1/2
">

        </div>

        <x-navbar textColor="text-white" hoverColor="hover:border-white" logo="img/logo.png" />

        <!-- HERO -->
        <div
            class="
    relative
    z-10
    flex
    flex-col
    items-center
    justify-center
    text-center
    pt-24
    md:pt-32
    lg:pt-40
    px-6
">

            <p class="text-2xl md:text-3xl lg:text-4xl mb-10">
                Impulsa tu marca al éxito digital
            </p>

            <h1 class="
    text-5xl
    md:text-6xl
    lg:text-7xl
    xl:text-8xl
    font-bold
    leading-none
">

                Transformación digital
                <br>

                con <span class="text-orange-500">visión</span>

            </h1>

            <p class="
    text-3xl
    md:text-4xl
    lg:text-5xl
    font-bold
    mt-10
    md:mt-12
">
                Haz crecer tu marca con estrategias innovadoras
            </p>

            <div
                class="
    mt-12
    border
    border-white/50
    rounded-full
    px-8
    md:px-12
    lg:px-20
    py-5
    md:py-6
    lg:py-8
    text-lg
    md:text-2xl
    lg:text-3xl
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
    bottom-6
    md:bottom-8
    lg:bottom-12
    right-6
    md:right-10
    lg:right-16
    flex
    items-center
    gap-3
    md:gap-4
    text-lg
    md:text-2xl
    lg:text-3xl
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
