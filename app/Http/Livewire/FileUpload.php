<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $file;

    public function fileUpload()
    {
        $validatedData = $this->validate([
            'file' => 'required|file|max:10240', // Tamaño máximo del archivo: 10MB
        ]);

        $path = $validatedData['file']->store('public/uploads');

        // Guardar el archivo en la base de datos u otra lógica adicional

        session()->flash('message', 'Archivo subido exitosamente.');

        $this->reset('file');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}