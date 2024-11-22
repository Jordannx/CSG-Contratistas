<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Destacados</title>
    @include('navbar')
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /* Barra de navegación */
        .navbar {
            background-color: #2e3b4e;
            padding: 15px;
            display: flex;
            justify-content: center;
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

        h1 {
            font-size: 24px;
            color: #0078D7;
            text-align: center;
        }

        /* Contenedor principal */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
            height: 700px; /* Altura del contenedor */
        }

        .text-section {
            flex: 1; /* La sección de texto ocupa el espacio restante */
            padding-right: 20px;
        }

        .text-section h1 {
            color: #1e3264;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .text-section p {
            color: #555555;
            font-size: 1em;
            line-height: 1.6;
        }

        .clients-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .client {
            background: #e9f5ff;
            padding: 10px 15px;
            border: 1px solid #d0e8f4;
            border-radius: 5px;
            font-size: 16px;
            color: #0056b3;
            font-weight: bold;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .client:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .image-section {
            flex: 0 0 300px; /* Ancho fijo para la imagen */
            height: 100%; /* Asegura que la imagen ocupe toda la altura */
            display: flex; /* Centra la imagen */
            align-items: center;
            justify-content: center;
            overflow: hidden; /* Oculta la parte de la imagen que exceda el contenedor */
        }

        .image-section img {
            width: auto; /* Ajusta el ancho automáticamente */
            height: 100%; /* Ocupa todo el alto del contenedor */
            object-fit: cover; /* Recorta la imagen para adaptarla al contenedor */
            object-position: center; /* Muestra la parte central de la imagen */
        }

        /* Pie de página */
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
            color: #777777;
            background-color: #f5f5f5;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Apilar las secciones verticalmente */
                gap: 20px; /* Reducir el espacio entre las secciones */
            }

            .image-section, .content-section, .sidebar {
                max-width: 100%; /* Asegurar que las secciones ocupen el 100% en pantallas pequeñas */
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>
    <!-- Contenido Principal -->
    <div class="container">
        <div class="text-section">
            <h1>¡Gracias por ser parte de nuestra familia!</h1>
            <p>
                Nos complace informarle que nuestra empresa se viene desempeñando con éxito 
                en el rubro de carpintería metálica, teniendo como principales clientes a:
            </p>
            <div class="clients-list">
                <div class="client">GESTION UNO SAC</div>
                <div class="client">ADGAVI & ASOCIADOS SAC</div>
                <div class="client">SERVIPRO SRL</div>
                <div class="client">RAS ARQUITECTOS CONSTRUCTORES EIRL</div>
                <div class="client">PROMART HOMECENTER</div>
                <div class="client">UNIVERSIDAD DE CIENCIAS APLICADAS (UPC)</div>
                <div class="client">EITAL</div>
                <div class="client">C&J CONSTRUCTORES SAC</div>
                <div class="client">INTEGRAL PROJECT</div>
                <div class="client">LTA INGENIEROS SAC</div>
                <div class="client">INMOBILIARIA CASABLANCA</div>
            </div>
        </div>

        <div class="image-section">
            <img src="https://noticias.upc.edu.pe/wp-content/uploads/2023/02/Campus_nota.png" alt="Imagen relacionada">
        </div>
    </div>

    <!-- Pie de página -->
    <div class="footer">
        © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
    </div>
</body>
</html>
