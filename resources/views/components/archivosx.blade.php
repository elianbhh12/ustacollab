<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Subir Archivo</title>
</head>
<body>
    <!-- component -->
<div class="relative   flex items-center justify-center  px-4 sm:px-6 lg:px-8  relative items-center"
">
<div class="absolute  opacity-60 inset-0 z-0"></div>
<div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
    <div class="text-center">
        <h3 class="mt-5 text-3xl font-bold text-gray-900">
            Subir Archivos 
        </h3>
    </div>
    <br>

    <form action="" id="dropzone"  class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
        @csrf
    </form>
    <p class="text-sm text-gray-300">
        <span>Tipo de archivo: JPG, PNG GIF, TIF, PSD,BMP</span>
    </p>
    <form class="mt-8 space-y-3" action="" method="POST">
        @csrf
        
                <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide">Titulo de proyecto</label>
                        <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="text" name="titulo" placeholder="Titulo">
                </div>
                <div>
                    <input type="hidden" name ="imagen" value="">
                </div>
                <div>
                    <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                    Cargar
                </button>
                </div>
    </form>
</div>
</div>


</body>
</html>