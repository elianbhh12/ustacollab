<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Proyecto;

class PageController extends Component
{  
    public  $proyecto, $titulo, $descripcion, $file ;
    // public function render()
    // {
    //     return view('livewire.page-controller');
    // }

    public function uploadpage(){

        $this->  proyecto = Proyecto:: all();
        return view('livewire.page-controller');
    }

    public function store(Request $request){


        
        $data=new proyecto();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();

        $request-> file->move('assets',$filename);
        $data->file=$filename;

        $data->titulo=$request->titulo;
        $data->descripcion=$request->descripcion;

        $data->save();

        return redirect()->back();
        
    }

    public function show(){
        $data=proyecto::all();

        return view('mostrarArchivo',compact('data'));
    
    
    }

    public function download(Request $request,$file){
        
        return response()->download(public_path($file));
    }
    public function view($id){
        $data=Proyecto::find($id);
        return view('viewProyecto',compact('data'));
}

}
