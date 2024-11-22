<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Contratistas Generales</title>
    @include('navbar')
    <style>
         @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Apilar las secciones verticalmente */
                gap: 20px; /* Reducir el espacio entre las secciones */
            }

            .image-section, .content-section, .sidebar {
                max-width: 100%; /* Asegurar que las secciones ocupen el 100% en pantallas pequeñas */
                margin: 0 auto;
            }

            .button-container {
                flex-direction: column; /* Colocar los botones uno debajo del otro en pantallas pequeñas */
                align-items: center;
            }
        }
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;

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
        }

        .text-section {
            flex: 1;
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

        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-section img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Sección de especialidades */
        .specialties {
            text-align: center;
            padding: 40px 20px;
            background-color: #e9ecef;
            margin-top: 20px;
        }

        .specialties h2 {
            color: #343a40;
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .specialties p {
            color: #555555;
            font-size: 1em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 20px auto;
        }

        /* Tarjetas de especialidades */
        .specialty-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
            text-align: center;
        }

        .card h3 {
            color: #1e3264;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .card p {
            color: #555555;
            font-size: 0.95em;
            line-height: 1.4;
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

            .button-container {
                flex-direction: column; /* Colocar los botones uno debajo del otro en pantallas pequeñas */
                align-items: center;
            }
        }
    </style>
</head>
<body>
<!-- Contenedor principal -->
<div class="container">
    <div class="text-section">
        <h1>Bienvenidos a C.S.G Contratistas Generales</h1>
        <p>
            En C.S.G Contratistas Generales, transformamos tus ideas en realidad a través de soluciones innovadoras en carpintería metálica. Con un equipo de expertos y con muchos años de experiencia en el sector, nos comprometemos a ofrecerte la más alta calidad y durabilidad en cada proyecto. Desde la fabricación de estructuras metálicas hasta trabajos personalizados, nuestra pasión por el diseño y la funcionalidad nos distingue.
        </p>
        <p>
            Descubre cómo podemos ayudarte a crear estructuras robustas y elegantes que se adapten a tus necesidades. Tu satisfacción es nuestra prioridad.
        </p>
    </div>
    <div class="image-section">
        <img src="css/imagenes/bienvenido.jpg" alt="Imagen logo">
    </div>
</div>

<!-- Sección de especialidades -->
<div class="specialties">
    <h2>Nuestras Especialidades</h2>
    <p>
        En C.S.G Contratistas Generales, nos especializamos en diversas áreas de la carpintería metálica. Nuestros servicios están diseñados para satisfacer las necesidades específicas de nuestros clientes y garantizar la máxima calidad en cada proyecto.
    </p>
    
    <!-- Tarjetas de especialidades -->
    <div class="specialty-cards">
        <div class="card">
            <h3>Fabricación de Estructuras Metálicas</h3>
            <p>Diseñamos y fabricamos estructuras metálicas resistentes y duraderas para cualquier tipo de construcción.</p>
        </div>
        <div class="card">
            <h3>Trabajos Personalizados</h3>
            <p>Instalamos drywall y fabricamos muebles en melamina, con acabados de alta calidad y diseños personalizados.</p>
        </div>
        <div class="card">
            <h3>Sistemas Levadizos</h3>
            <p>Instalamos sistemas levadizos eficientes y seguros, ideales para garages y espacios industriales.</p>
        </div>
        <div class="card">
            <h3>Reparaciones y Mantenimiento</h3>
            <p>Ofrecemos servicios de reparación y mantenimiento para garantizar la longevidad de tus estructuras metálicas.</p>
        </div>
    </div>
</div>

<!-- Pie de página -->
<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>

</body>
</html>
