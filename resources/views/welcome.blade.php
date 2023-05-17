<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @extends('links')
        <title>Inicio</title>
    </head>
    <body class="no-underline">
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                
                    <img src="https://i.ibb.co/RvVTPkk/Brand-initial-Simple-Logo.png" class="mr-3 h-20 " alt="UstaCollab Logo" />
                
                <div class="flex items-center lg:order-2 ">
                    <a href={{ route("login") }} class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg 
                    text-sm px-5 py-2.5 mr-2 focus:outline-none no-underline ">Iniciar Sesion</a>
                    <a href="{{ route("register") }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium 
                    rounded-lg text-sm px-5 py-2.5 mr-2 focus:outline-none no-underline ">Registrarse</a>
                </div>
            </div>
        </nav>
    </header>

    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">Repositorio de la facultad de Telecomunicaciones! </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">Un espacio dedicado a almacenar, compartir y colaborar en la gestión de archivos y documentos. Siempre a la disposición de la facultad.</p>
                <a href="{{ route("register") }}" class="no-underline inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Registrate con tu correo Institucional
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://autoevaluacionprogramas.usta.edu.co/imagenes/11004Logo_Facultad.png" alt="mockup">
                {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logotipo_USTA_Colombia.gif" alt="mockup"> --}}
            </div>                
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 md:text-4xl">Archivos Compatibles</h2>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6">
                <a href="" class="flex justify-center items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/2048px-Visual_Studio_Code_1.35_icon.svg.png" class="h-16 hover:text-gray-900" alt="">                                               
                </a>

                <a href="" class="flex justify-center items-center">
                    <img src="https://img.freepik.com/iconos-gratis/pdf_318-187733.jpg" class="h-16" alt="">
                </a>
                <a href="" class="flex justify-center items-center">
                    <img src="https://logodownload.org/wp-content/uploads/2020/04/microsoft-powerpoint-logo-0.png" class="h-16 hover:text-gray-900" alt="">                                               
                </a>
                <a href="" class="flex justify-center items-center">
                    <img src="https://logodownload.org/wp-content/uploads/2018/10/word-logo-8.png" class="h-16 hover:text-gray-900" alt="">                                               
                </a>
                <a href="" class="flex justify-center items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Microsoft_Office_Excel_%282019%E2%80%93present%29.svg/2203px-Microsoft_Office_Excel_%282019%E2%80%93present%29.svg.png" class="h-16 hover:text-gray-900" alt="">                                               
                </a>
                <a href="" class="flex justify-center items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/136/136545.png" class="h-16 hover:text-gray-900" alt="">                                               
                </a>
    
                
            </div>
        </div>
    </section>

    

    </body>
</html>
