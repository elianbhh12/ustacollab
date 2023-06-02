<div>
    <div>
        @if (session()->has('message'))
            <div class="bg-green-200 p-4 mb-4">
                {{ session('message') }}
            </div>
        @endif
    
        <form wire:submit.prevent="fileUpload" enctype="multipart/form-data">
            <div class="mb-4">
                <input type="file" wire:model="file" id="file" class="form-input">
                @error('file') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
        </form>
    </div>

</div>

<!-- Suponiendo que $proyecto es el objeto del modelo Proyecto -->
{{-- <img src="{{ Storage::url('uploads/' . $proyecto->file) }}" alt="Archivo"> --}}
