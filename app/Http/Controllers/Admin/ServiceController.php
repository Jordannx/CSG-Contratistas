<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Mostrar todos los servicios.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.paneladministrativo', compact('services'));
    }
    


    /**
     * Mostrar el formulario para crear un servicio.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Guardar un nuevo servicio.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
        ]);

        // Subir la imagen
        $imagePath = $request->file('image')->store('services_images', 'public');
        
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Servicio creado con éxito.');
    }

    /**
     * Mostrar el formulario para editar un servicio.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Actualizar un servicio.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Imagen opcional
        ]);

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si se sube una nueva
            if ($service->image) {
                unlink(storage_path('app/public/' . $service->image));
            }

            // Subir la nueva imagen
            $imagePath = $request->file('image')->store('services_images', 'public');
            $service->image = $imagePath;
        }

        $service->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Servicio actualizado con éxito.');
    }

    /**
     * Eliminar un servicio.
     */
    public function destroy(Service $service)
    {
        // Eliminar la imagen del servicio
        if ($service->image) {
            unlink(storage_path('app/public/' . $service->image));
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Servicio eliminado con éxito.');
    }
}
