<form >
    @csrf
    <div class="mb-4">
        <label for="titulo" class="block text-gray-700">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-input mt-1 block w-full"
            placeholder="Ingrese el título" required>
    </div>
    <div class="mb-4">
        <label for="fecha" class="block text-gray-700">Fecha</label>
        <input type="date" name="fecha" id="fecha" class="form-input mt-1 block w-full" required>
    </div>
    <div class="mb-4">
        <label for="usuario" class="block text-gray-700">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-input mt-1 block w-full"
            placeholder="Ingrese el usuario" required>
    </div>
    <div class="mb-4">
        <label for="archivo" class="block text-gray-700">Archivo</label>
        <input type="file" name="archivo" id="archivo" class="form-input mt-1 block w-full" required>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    </div>
</form>
