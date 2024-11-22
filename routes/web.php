<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Spatie\Permission\Models\Role;


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para el perfil de usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Usando PUT
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

Route::get('/login.blade', function () {
    return view('login.blade');
})->name('login.blade');

//////////////////////////////////////////////////////
Route::get('/trabajodrywall', function () {
    return view('trabajodrywall');
})->name('trabajodrywall');

Route::get('/trabajometalicas', function () {
    return view('trabajometalicas');
})->name('trabajometalicas');

Route::get('/trabajomelamina', function () {
    return view('trabajomelamina');
})->name('trabajomelamina');

Route::get('/trabajolevadizo', function () {
    return view('trabajolevadizo');
})->name('trabajolevadizo');

Route::get('/inicio', function () {
    return view('inicio'); // O el controlador correspondiente
})->name('inicio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// Ruta de perfil (esto puede ser tu perfil de usuario)
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');

// Ruta de cerrar sesión
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/panel-administrativo', function () {
        return view('paneladministrativo');  // Usa el nombre correcto de la vista, en minúsculas
    })->name('panel.admin');
});


Route::get('/admin', function () {
    // Solo accesible para roles 'admin' o 'editor'
})->middleware('role:admin|editor');

Route::group(['middleware' => ['role:admin']], function () {
    // your routes
});

use App\Http\Controllers\Admin\ServiceController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', ServiceController::class);
});
