{{-- <div>
    <form action="{{route('uploadArchivo')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name='titulo' placeholder="Titulo de proyecto">
        <input type="text" name='descripcion' placeholder="Descripcion">
        <input type="file" name='file'>

        <input type="submit">
    </form>
</div> --}}

<div
    class="relative  flex items-center justify-center bg-white px-4 sm:px-6 lg:px-8  ">
    <div class="absolute  opacity-60 inset-0 z-0"></div>
    <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
        <div class="text-center">
            <h3 class="mt-5 text-3xl font-bold text-gray-900">
                Crea una nuevo proyecto
            </h3>
        </div>
        <br>

        <form class="mt-8 space-y-3" action="{{route('uploadArchivo')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 space-y-2">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Titulo Archivo</label>
                <input
                    class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                    type="text" name="titulo" placeholder="Titulo">
            </div>
            <div class="grid grid-cols-1 space-y-2">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Descripcion</label>
                <input
                    class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                    type="text" name="descripcion" placeholder="Descripcion">
            </div>
            <div class="grid grid-cols-1 space-y-2">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Archivo</label>
                <input type="file" name='file'>
            </div> 

                <div>
                    <input type="submit"
                        class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                </div>
        </form>
    </div>
</div>

