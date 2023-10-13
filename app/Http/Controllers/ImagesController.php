<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function create()
    {
       
        return view('images.create'); 
    }
    public function store(Request $request)
    {
        // Valida que se haya enviado un archivo de imagen
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Establece las reglas de validación
        ]);
    
        // Obtiene la instancia del archivo de imagen
        $image = $request->file('image');
    
        // Genera un nombre único para la imagen basado en la marca de tiempo
        $name = time() . '.' . $image->getClientOriginalExtension();
    
        // Define la ruta donde se almacenará la imagen en el sistema de archivos
        $path = 'storage/images/' . $name;
    
        // Mueve la imagen al directorio de almacenamiento
        $image->move(public_path('storage/images'), $name);
    
        // Crea una nueva instancia del modelo Image y asigna los valores
        $newImage = new Image();
        $newImage->name = $name;
        $newImage->path = $path;
        $newImage->save();
    
        // Redirecciona de nuevo a la página de inicio o a donde desees
        return redirect()->route('welcome')->with('success', 'Imagen cargada correctamente.');
    }

        
    

    public function index()
    {
        $images = Image::all(); // Obtener todas las imágenes de la base de datos

        return view('images.index', compact('images'));
    }

        
}

