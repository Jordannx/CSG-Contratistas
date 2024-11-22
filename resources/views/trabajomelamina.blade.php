<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajos en melamina | CSG Contratistas Generales</title>
    @include('navbar') <!-- Incluye tu barra de navegación -->
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
            flex-wrap: wrap; /* Asegura que el contenido se acomode bien en pantallas pequeñas */
        }

        /* Botones */
        .button-container {
            display: flex;
            justify-content: flex-start;
            gap: 20px;
            margin-bottom: 20px;
            width: 100%;
        }

        .button {
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1em;
            text-align: center;
        }

        .button-back {
            background-color: #007bff;
        }

        .button-service {
            background-color: #28a745;
        }

        .button:hover {
            opacity: 0.9;
        }

        /* Sección de imagen */
        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 50%;
            margin-bottom: 20px;
        }

        .image-section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Sección de contenido principal */
        .content-section {
            flex: 2;
            max-width: 600px;
            padding: 0 20px;
        }

        .content-section h2 {
            color: #1e3264;
            font-size: 2em;
            margin-top: 0;
        }

        .content-section p {
            color: #555555;
            font-size: 1.1em;
            line-height: 1.6;
            text-align: justify;
        }

        /* Sección lateral */
        .sidebar {
            flex: 1;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 1em;
            color: #555555;
            max-width: 200px;
            margin-top: 20px;
        }

        .sidebar h4 {
            color: #333333;
            font-size: 1.2em;
            margin-top: 0;
            text-align: center;
        }

        .sidebar ul {
            padding: 0;
            list-style-type: none;
            margin-top: 10px;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        /* Para pantallas pequeñas */
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

<div class="container">
    <!-- Botones de navegación -->
    <div class="button-container">
        <a href="servicios" class="button button-back">← Regresar</a>
        <a href="#" class="button button-service">Solicitar Servicio</a>
    </div>

    <!-- Sección de imagen -->
    <div class="image-section">
        <img src="css/imagenes/servicio2.png" alt="Imagen de trabajos en Drywall">
    </div>

    <!-- Sección de contenido principal -->
    <div class="content-section">
        <h2>TRABAJOS EN MELAMINA</h2>
        <p>
        En C.S.G CONTRATISTAS GENERALES ofrecemos un servicio integral en la fabricación e instalación de muebles y estructuras en melamina, 
        diseñados para optimizar el espacio y mejorar la estética de cualquier ambiente. Utilizamos materiales de primera calidad, con una amplia 
        gama de acabados y diseños personalizables, adaptándonos a las necesidades específicas de nuestros clientes. Nuestro equipo altamente capacitado
         se encarga de cada detalle, desde el diseño hasta la instalación, asegurando que cada mueble no solo cumpla con su función, sino que también 
         complemente la decoración y el estilo del espacio. Con un enfoque en la calidad y el servicio al cliente, garantizamos una experiencia excepcional 
         en cada proyecto.
        </p>
        
    </div>

    <!-- Sección lateral -->
    <div class="sidebar">
        <h4>¿Por qué elegirnos?</h4>
        <ul>
            <li style="margin-bottom: 35px;"> Calidad garantizada en cada proyecto</li>
            
            <li style="margin-bottom: 35px;">Entregas puntuales y compromiso</li>
            <li style="margin-bottom: 35px;">Equipo profesional y capacitado</li>
            <li style="margin-bottom: 35px;">Relación costo-beneficio óptima</li>
        </ul>
    </div>
</div>

</body>
</html>
