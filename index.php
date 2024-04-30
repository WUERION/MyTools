<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/img/logo.webp" type="image/x-icon">
</head>

<body class="text-white bg-black">
    <nav class="hidden md:block fixed  top-0 w-full">
        <ul class="flex justify-center bg-gray-500 w-full">
            <li class="button-nav py-2.5"><a href="#colors" class="border py-2.5 px-5 button-nav">colors</a></li>
            <li class="button-nav py-2.5"><a href="#gradients" class="border py-2.5 px-5 button-nav">gradients</a></li>
            <li class="button-nav py-2.5"><a href="#fonts" class="border py-2.5 px-5 button-nav">Fonts</a></li>
            <li class="button-nav py-2.5"><a href="#" class="border py-2.5 px-5 button-nav">Effects</a></li>
            <li class="button-nav py-2.5"><a href="#" class="border py-2.5 px-5 button-nav">Buttons</a></li>
            <li class="button-nav py-2.5"><a href="#" class="border py-2.5 px-5 button-nav">Borders</a></li>
            <li class="button-nav py-2.5"><a href="#" class="border py-2.5 px-5 button-nav">Incos</a></li>
        </ul>
    </nav>
    <header>
        <div class="flex justify-evenly flex-col h-[100dvh] md:h-full">
            <!-- <div class=" hidden md:block h-11">-</div>` -->
            <div class="w-full h-full flex flex-col justify-around items-center p-5">
                <div class="flex w-full justify-center items-center">
                    <h2 class=" text-lg lg:text-4xl text-center font-semibold typing-title">!Hi Welcome to my web the
                        Tools
                    </h2>
                </div>
                <div class="border text-center font-normal p-2 md:p-5">
                    <h1 class="text-base lg:text-xl">Soy un apasionado del diseño web y me encanta compartir los
                        recursos que suelo utilizar en mis
                        poyectos. En esta web podras en contrar una seleccion de los mejores recursos que he encontrado
                        a lo largo de los años. Como Paletas de colores, Fuentes, Iconos, Plantillas, plugins y
                        herramientas.</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!--* section colors -->
        <section id="colors" class="p-5">
            <div class="text-center border rounded-md">
                <h2 class="font-semibold text-base lg:text-xl">Colores</h2>
                <p class="text-base lg:text-lg">Aqui encontraras los colores que mas utilizo y los que mas me gustan</p>
            </div>
            <div class="flex flex-col items-center gap-2 md:flex-row justify-center md:mt-5 w-full">
                <p class="flex mx-3 lg:mx-0 lg:text-lg">Ingresa el Color <span class="hidden md:block"> --> </span>
                </p>
                <input type="text" class="px-2 text-black rounded-md outline-none" placeholder="Ingresa el codigo HEXA o RGB" id="inputCodeColor">
                <div class="md:mx-14">
                    <button class="w-full text-base lg:text-lg px-2 border bg-gray-500 rounded-md" id="buttonColor">Crear Color</button>
                </div>
            </div>
            <!--* container  -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 p-5" id="containerCardsColors">
                <div class="cards-colors">
                    <div class="block-color" id="block-color">
                    </div>
                    <div class="container-text-color">
                        <p class="textHexa">#FFFFFF</p>
                        <p class="textRGB">rgb(255, 255, 255)</p>
                    </div>
                    <button class="button-copy">Copy</button>
                </div>
            </div>
        </section>
        <!--* section gradients -->
        <section id="gradients" class="p-5">
            <div class="text-center border rounded-md">
                <h2 class="font-semibold text-base lg:text-xl">gradientes</h2>
                <p class="text-base lg:text-lg">Aqui encontraras las gradientes que mas utilizo y los que mas me gustan
                </p>
            </div>
            <div class="flex flex-col items-center gap-2 lg:flex-row justify-center md:mt-5 w-full">
                <p class="flex mx-3 md:mx-0 lg:text-lg text-base my-2 md:my-0">Ingresa los colores <span class="hidden lg:block mx-3"> --> </span></p>
                <div class="flex flex-col gap-2 justify-center md:flex-row">
                    <input type="text" class="px-2 text-black rounded-md outline-none md:w-1/5 lg:w-1/4" placeholder="#FFE53B" id="inputFristColor">
                    <input type="text" class="px-2 text-black rounded-md outline-none md:w-1/5 lg:w-1/4" placeholder="90deg" id="inputDeg">
                    <input type="text" class="px-2 text-black rounded-md outline-none md:w-1/5 lg:w-1/4" placeholder="#00ffff" id="inputSecondColor">
                    <button class="w-full text-base lg:text-lg px-2 border bg-gray-500 rounded-md md:w-1/5 lg:w-1/5" id="buttonGradient">Crear gradiente</button>
                </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 p-5" id="containerCardsGradiendt">
                <div class="cards-gradient">
                    <div class="block-gradient" id="block-gradient"></div>
                    <div class="container-text-gradient">
                        <p>#FFE53B</p>
                        <p>90deg</p>
                        <p>#00FFFF</p>
                    </div>
                    <button class="button-copy">Copy</button>
                </div>
            </div>
        </section>
        <!--* section fonts  -->
        <section id="fonts" class="p-5">
            <div class="border text-center rounded-md">
                <h2 class="font-semibold text-base lg:text-xl">Fonts</h2>
                <p class="text-base lg:text-lg">Aqui encontraras la fuentes que mas suelo utilizar y las que mas me
                    gustan</p>
            </div>
            <div class="flex justify-center items-center py-2">
                <div class="flex flex-col items-center justify-center w-full gap-2 md:flex-row lg:gap-6">
                    <p class="flex mx-2 lg:mx-0">Ingresa la fuente <span class="hidden md:block mx-3"> --> </span></p>
                    <input type="text" class="rounded-md outline-none px-2 text-black" placeholder="Ingresa el nombre" id="inputNameFont">
                    <input type="url" class="rounded-md outline-none px-2 text-black" placeholder="Ingresa la URL" id="inputURL">
                    <button class="md:w-1/7 text-base lg:text-lg px-2 border bg-gray-500 rounded-md" id="buttonFont">Subir Font</button>
                </div>
            </div>
            <div class="">
                <div class="grid gap-4 p-5 md:grid-cols-2 lg:grid-cols-4" id="containerCardsFonts">
                    <div class="card-font">
                        <h3 class="name-font">Nunito</h3>
                        <div class="box-the-text">
                            <p class="text-example">A, a, B, b, C, c, 1, 2, 3, 4, 5, 0</p>
                        </div>
                        <button class="button-copy">Copy</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="index.js"></script>
    <script src="colores.js"></script>
</body>

</html>