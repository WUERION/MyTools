<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tools | colors</title>
    <link rel="stylesheet" href="../style/output.css">
    <link rel="stylesheet" href="../style/globals.css">
    <link rel="stylesheet" href="../style/notify.css">
    <link rel="shortcut icon" href="../img/logo.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="h-dvh [background:radial-gradient(100%_200%_at_50%_5%,#000_20%,#63e_100%);] lg:[background:radial-gradient(100%_500%_at_50%_5%,#000_40%,#63e_120%);]">
    <header class="fixed top-1 w-full  flex items-center justify-between p-2.5 my-8">
        <nav class="w-full">
            <ul class="flex justify-between px-5">
                <ul class="flex gap-5">
                    <li><a href="#"><img src="../img/logo.webp" alt="logo" class="w-6 rounded"></a></li>
                    <li><a href="../index.php"><svg class="fill-white w-6 transition duration-700 ease-in-out hover:fill-cyan-hover" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path d="m29.707 15.793-13-13a.999.999 0 0 0-1.414 0l-13 13a.999.999 0 1 0 1.414 1.414L16 4.914l8.014 8.014c-.001.025-.014.047-.014.072v15H8V18a1 1 0 1 0-2 0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V14.914l2.293 2.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414z">
                                </path>
                            </svg></a></li>
                </ul>
                <ul class="flex gap-5">
                    <li><a href="">
                            <svg class="fill-white w-6 transition duration-700 ease-in-out hover:fill-cyan-hover" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                <path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z" />
                            </svg>
                        </a></li>
                    <li><a href="">
                            <svg class="feather feather-github text-white w-6 transition duration-700 ease-in-out hover:text-cyan-hover" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                            </svg>
                        </a></li>
                </ul>
            </ul>
        </nav>
    </header>
    <main>
        <div id="notify"><p id="notifyText"></p></div>
        <div class="felx items-center justify-center my-5">
            <div class="p-5 lg:w-1/2">
                <h2 class="text-white text-center text-3xl">Colores</h2>
                <div class="felx items-center my-32">
                    <h1 class="text-white text-center text-base lg:text-xl">Aquí encontraras todos los colores que suelo
                    utilizar en mis proyectos</h1>
                </div>
            </div>
        </div>
        <form action="" method="get" class="flex items-center justify-center gap-5">
            <input type="text" placeholder="RGB o HEXA" id="inputColor" name="inputColor" required class="text-white p-1 border-b-2 bg-transparent outline-none hover:border-cyan-hover placeholder:text-cyan-hover focus:border-cyan-hover">
            <input type="button" value="Crear color" id="createColor" class="text-white text-base p-1 border-b-2 hover:cursor-pointer hover:border-cyan-hover">
        </form>
        <section class="grid grid-cols-2 lg:grid-cols-4 gap-5 p-5" id="container">
            <div class="card">
                <p class="codeColor">rgb(249, 268, 212) | #f9a8d4</p>
                <div class="bg-pink-300 boxColor"></div>
                <button class="copybnt">Copy</button>
            </div>
        </section>
    </main>
    <script src="../js/colors.js"></script>
</body>

</html>