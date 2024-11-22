<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil | CSG Contratistas Generales</title>
    @include('navbar') <!-- Aquí incluyes tu barra de navegación -->
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Barra de navegación */
        .navbar {
            background-color: #2e3b4e;
            padding: 15px;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .navbar a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #ffc107;
        }

        /* Contenedor principal */
        .container {
            max-width: 400px;
            background-color: #ffffff;
            padding: 30px;
            margin: 50px auto;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Estilo para el formulario */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            color: #1e3264;
            font-weight: bold;
        }

        input, select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn {
            background-color: #1e3264;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #2e3b4e;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
            color: #777777;
            margin-top: 20px;
            width: 100%;
        }

        /* Estilo adicional para el título */
        h2 {
            color: #1e3264;
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        /* Vinculos secundarios */
        .secondary-links {
            margin-top: 10px;
            font-size: 0.9em;
        }

        .secondary-links a {
            color: #1e3264;
            text-decoration: none;
            margin: 0 5px;
        }

        .secondary-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>EDITAR PERFIL</h2>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT') <!-- Método PUT para actualización -->
        
        <label for="name">Nombre completo:</label>
        <input id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required placeholder="Nombre completo">

        <label for="email">Correo electrónico:</label>
        <input id="email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required autocomplete="email" placeholder="Correo electrónico">

        <label for="password">Nueva Contraseña:</label>
        <input id="password" type="password" name="password" placeholder="Nueva contraseña (opcional)">

        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmar contraseña">

        <button type="submit" class="btn">ACTUALIZAR PERFIL</button>
    </form>
</div>

<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>
</body>
</html>
