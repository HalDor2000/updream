<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<style>
    .hero-updream {
        min-height: 100vh;
        color: #fff;
        position: relative;
        overflow: hidden;

        background:
            radial-gradient(circle at -5% 5%,
                #ff5b12 0%,
                rgba(255, 91, 18, 0.92) 16%,
                rgba(218, 94, 78, 0.55) 30%,
                transparent 44%),
            radial-gradient(circle at 40% 40%,
                rgba(148, 92, 176, 0.78) 0%,
                rgba(111, 104, 204, 0.58) 38%,
                transparent 62%),
            linear-gradient(115deg,
                #626de0 62%,
                #3478ff 100%);
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up Dream</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{ $slot }}

</body>



</html>
