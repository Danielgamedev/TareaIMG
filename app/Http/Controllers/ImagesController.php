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
        $image = $request->file('image');

        $name = time() . '.' . $image->extension();
        $path = 'storage/images/' . $name;

        $image->move(public_path($path));

        $image = new Image();
        $image->name = $name;
        $image->path = $path;
        $image->save();

        return redirect()->route('welcome');
    }

    public function index()
    {
        $images = Image::all(); // Obtener todas las imágenes de la base de datos

        return view('images.index', compact('images'));
    }

        
}

