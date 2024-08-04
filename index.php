<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tools</title>
    <link rel="stylesheet" href="./style/output.css">
    <link rel="shortcut icon" href="./img/logo.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="h-full [background:radial-gradient(100%_200%_at_50%_5%,#000_20%,#63e_100%);] lg:[background:radial-gradient(100%_500%_at_50%_5%,#000_40%,#63e_120%);]">
    <header class="flex items-center justify-between p-2.5 my-8">
        <nav class="w-full">
            <ul class="flex justify-between px-5">
                <li><a href="#" target="_blank" noopener noreferer><img src="../img/logo.webp" alt="logo" class="w-6 rounded"></a></li>
                <ul class="flex gap-5">
                    <li><a href="">
                            <svg class="fill-white w-6 transition duration-700 ease-in-out hover:fill-[#00ffff]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                <path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z" />
                            </svg>
                        </a></li>
                    <li><a href="">
                            <svg class="feather feather-github text-white w-6 transition duration-700 ease-in-out hover:text-[#00ffff]" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                            </svg>
                        </a></li>
                </ul>
            </ul>
        </nav>
    </header>
    <main>
        <div class="flex justify-center items-center my-5">
            <div class="p-5 lg:w-1/2">
                <h2 class="text-white text-center text-3xl">Bienvenidos a mi web de herramientas</h2>
                <div class="flex items-center my-32">
                    <h1 class="text-white text-base text-center lg:text-xl">Soy un apasionado del diseño web y me
                        encanta compartir los
                        recursos que suelo utilizar en mis
                        poyectos. En esta web podras en contrar una seleccion de los mejores recursos que he encontrado
                        a lo largo de los años. Como Paletas de colores, Fuentes, Iconos, Plantillas, plugins y
                        herramientas.</h1>
                </div>
            </div>
        </div>
        <section class="my-32 p-2.5">
            <div>
                <h2 class="text-white text-center text-base mb-5 md:text-lg lg:text-xl">Colores</h2>
                <p class="text-white text-center text-base lg:text-lg">Aquí estan los colores que mas utilizo</p>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 p-2">
                <div class="border p-2 rounded hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center mb-2 lg:text-lg">rgb(249 168 212) | #f9a8d4</p>
                    <div class="bg-pink-300 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
                <div class="border p-2 rounded hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center mb-2 lg:text-lg">rgb(249 168 212) | #f9a8d4</p>
                    <div class="bg-pink-300 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
                <div class="border p-2 rounded hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center mb-2 lg:text-lg">rgb(249 168 212) | #f9a8d4</p>
                    <div class="bg-pink-300 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
                <div class="border p-2 rounded hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center mb-2 lg:text-lg">rgb(249 168 212) | #f9a8d4</p>
                    <div class="bg-pink-300 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
            </div>
            <div>
                <a href="./src/colors.php" class="text-white text-base ml-5 lg:text-lg hover:text-cyan-hover">Ver más...</a>
            </div>
        </section>
        <section class="my-32 p-2.5">
            <div>
                <h2 class="text-white text-center text-base mb-5 md:text-lg lg:text-xl">Gradientes</h2>
                <p class="text-white text-center text-base lg:text-lg">Aquí estan los gradientes que mas utilizo</p>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 p-2">
                <div class="border rounded p-2 hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center lg:text-lg"> 45deg, #00ffff, #a3e635</p>
                    <div class="bg-gradient-to-tr from-cyan-500 to-lime-400 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
                <div class="border rounded p-2 hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center lg:text-lg"> 45deg, #00ffff, #a3e635</p>
                    <div class="bg-gradient-to-tr from-cyan-500 to-lime-400 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
                <div class="border rounded p-2 hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center lg:text-lg"> 45deg, #00ffff, #a3e635</p>
                    <div class="bg-gradient-to-tr from-cyan-500 to-lime-400 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
                <div class="border rounded p-2 hover:border-cyan-hover hover:scale-105">
                    <p class="text-white text-base text-center lg:text-lg"> 45deg, #00ffff, #a3e635</p>
                    <div class="bg-gradient-to-tr from-cyan-500 to-lime-400 h-14 rounded"></div>
                    <button class="text-white p-1 hover:text-cyan-hover">copy</button>
                </div>
            </div>
            <div>
                <a href="./src/gradient.php" class="text-white text-base ml-5 lg:text-lg hover:text-cyan-hover">Ver más...</a>
            </div>
        </section>
        <section class="my-32 p-2.5">
            <div>
                <h2 class="text-white text-center text-base mb-5 md:text-lg lg:text-xl">Fuentes</h2>
                <p class="text-white text-center text-base lg:text-lg">Aquí estan las Fuentes que más suelo utilizar</p>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 p-2">
                <div class="border rounded hover:border-cyan-hover hover:cursor-pointer hover:scale-105">
                    <div class="p-5">
                        <h3 class="text-white text-base text-center lg:text-md mb-2">MuseoModerno</h3>
                        <p class="text-white text-base text-center lg:text-md">A, a, B, b, C, c, 0, 1, 2, 3, 4, 5</p>
                        <button class="text-white p-1 hover:text-cyan-hover">Copy</button>
                    </div>
                </div>
                <div class="border rounded hover:border-cyan-hover hover:cursor-pointer hover:scale-105">
                    <div class="p-5">
                        <h3 class="text-white text-base text-center lg:text-md mb-2">MuseoModerno</h3>
                        <p class="text-white text-base text-center lg:text-md">A, a, B, b, C, c, 0, 1, 2, 3, 4, 5</p>
                        <button class="text-white p-1 hover:text-cyan-hover">Copy</button>
                    </div>
                </div>
                <div class="border rounded hover:border-cyan-hover hover:cursor-pointer hover:scale-105">
                    <div class="p-5">
                        <h3 class="text-white text-base text-center lg:text-md mb-2">MuseoModerno</h3>
                        <p class="text-white text-base text-center lg:text-md">A, a, B, b, C, c, 0, 1, 2, 3, 4, 5</p>
                        <button class="text-white p-1 hover:text-cyan-hover">Copy</button>
                    </div>
                </div>
                <div class="border rounded hover:border-cyan-hover hover:cursor-pointer hover:scale-105">
                    <div class="p-5">
                        <h3 class="text-white text-base text-center lg:text-md mb-2">MuseoModerno</h3>
                        <p class="text-white text-base text-center lg:text-md">A, a, B, b, C, c, 0, 1, 2, 3, 4, 5</p>
                        <button class="text-white p-1 hover:text-cyan-hover">Copy</button>
                    </div>
                </div>
                <div class="border rounded hover:border-cyan-hover hover:cursor-pointer hover:scale-105">
                    <div class="p-5">
                        <h3 class="text-white text-base text-center lg:text-md mb-2">MuseoModerno</h3>
                        <p class="text-white text-base text-center lg:text-md">A, a, B, b, C, c, 0, 1, 2, 3, 4, 5</p>
                        <button class="text-white p-1 hover:text-cyan-hover">Copy</button>
                    </div>
                </div>
            </div>
            <div>
                <a href="./src/fonts.php" class="text-white text-base ml-5 lg:text-lg hover:text-cyan-hover">Ver más...</a>
            </div>
        </section>
        <section class="my-32 p-2.5">
            <div>
                <h2 class="text-white text-center text-base mb-5 md:text-lg lg:text-xl">Herramientas</h2>
                <p class="text-white text-center text-base mb-5 lg:text-lg">Aquí estan las herramientas que más utilizo</p>
            </div>
            <div class="grid grid-cols-2 gap-5 p-2 lg:grid-cols-4">
                <a href="https://t.co/GvdmSf49ll" target="_blank" noreferer noopener
                    class="border rounded hover:scale-105">
                    <img src="../img/bg.ibelick.webp" alt="web bg.ibelick.com">
                </a>
                <a href="https://convertio.co/es/" class="border rounded hover:scale-105" target="_blank" noreferer
                    noopener>
                    <img src="../img/convertio.webp" alt="web convertio.com">
                </a>
                <a href="https://fonts.google.com/" class="border rounded hover:scale-105" target="_blank" noreferer
                    noopener>
                    <img src="../img/googleFonts.webp" alt="web fonts.google.com">
                </a>
                <a href="https://tailwindcss.com/" class="border rounded hover:scale-105" target="_blank" noreferer
                    noopener>
                    <img src="../img/tailwindcss.webp" alt="web convertio.com">
                </a>
            </div>
            <div>
                <a href="#" class="text-white text-base ml-5 lg:text-lg hover:text-cyan-hover">Ver más...</a>
            </div>
        </section>
    </main>
</body>

</html>