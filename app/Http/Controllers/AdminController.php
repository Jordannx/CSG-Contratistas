<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class AdminController extends Controller
{
    // Método para mostrar el panel administrativo
    public function index()
    {
        return view('paneladministrativo'); // Asegúrate de que la vista se llame 'PanelAdministrativo.blade.php'
    }
}
