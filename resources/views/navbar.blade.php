<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Dinámica</title>
    <style>
        /* Estilos generales de la barra de navegación */
        .navbar {
            background-color: #2e3b4e;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar a {
            color: #000000;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px; /* Tamaño consistente */
        }

        .navbar a:hover {
            color: #de2f2f;
        }

        /* Estilo del dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 50px; /* Agregado para moverlo a la derecha */
        }

        .dropbtn {
            background-color: #2e3b4e;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px; /* Tamaño consistente */
        }

        .dropbtn:hover {
            color: #ffc107;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 150px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
            border-radius: 5px;
        }

        /* Estilo específico para 'Modificar Perfil' */
        .dropdown-content a.modify-profile {
            color: black; /* Color negro para 'Modificar Perfil' */
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            text-align: left;
            font-size: 14px; /* Tamaño consistente */
        }

        /* Efecto hover para 'Modificar Perfil' */
        .dropdown-content a.modify-profile:hover {
            background-color: #f5f5f5;
            color: #2e3b4e; /* Cambia el color de texto al pasar el mouse */
        }

        /* Estilo para el enlace de "Panel de Administración" */
        .dropdown-content a[href="{{ route('panel.admin') }}"] {
            color: black; /* Color negro para el enlace "Panel de Administración" */
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            text-align: left;
            font-size: 14px; /* Tamaño consistente */
        }

        /* Efecto hover sobre el enlace de "Panel de Administración" */
        .dropdown-content a[href="{{ route('panel.admin') }}"]:hover {
            background-color: #f5f5f5;
            color: #2e3b4e;
        }

        /* Enlaces del menú desplegable */
        .dropdown-content a, .logout-btn {
            color: #000000; /* Color negro para el botón de salir */
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            text-align: left;
            font-size: 14px; /* Tamaño consistente */
        }

        /* Efecto hover sobre los enlaces */
        .dropdown-content a:hover, .logout-btn:hover {
            background-color: #f5f5f5;  /* Color de fondo al pasar el cursor */
            color: #2e3b4e; /* Color de texto al pasar el cursor */
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Estilo para el formulario del botón de logout */
        .logout-btn {
            background: none;
            border: none;
            color: #000000; /* Color negro */
            text-align: left;
            width: 100%;
            cursor: pointer;
            padding: 10px 15px;
            font-size: 14px; /* Tamaño consistente */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/">Inicio</a>
        <a href="/nosotros">Nosotros</a>
        <a href="/servicios">Servicios</a>
        <a href="/clientes">Clientes</a>
        <a href="/proyectos">Proyectos</a>
        <a href="/contactanos">Contáctanos</a>

        <!-- Menú dinámico basado en autenticación -->
        @auth
            <div class="dropdown">
                <button class="dropbtn">
                    {{ Auth::user()->name ?? Auth::user()->email }}
                </button>
                <div class="dropdown-content">
                    <!-- 'Modificar Perfil' con color negro de base -->
                    <a href="{{ route('profile.edit') }}" class="modify-profile">Modificar Perfil</a>

                    <!-- Opción visible solo para administradores -->
                    @role('admin')
                        <a href="{{ route('panel.admin') }}">Panel de Administración</a>
                    @endrole

                    <form method="POST" action="{{ route('logout') }}" style="margin: 0; padding: 0;">
                        @csrf
                        <button type="submit" class="logout-btn">Salir</button>
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}">Iniciar Sesión</a>
        @endauth
    </div>
</body>
</html>
