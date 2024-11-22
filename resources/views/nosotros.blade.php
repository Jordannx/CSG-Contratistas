<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros | CSG Contratistas Generales</title>
    @include('navbar')  
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
            max-width: 800px;
            background-color: #ffffff;
            padding: 20px 40px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Títulos y texto */
        h2 {
            color: #1e3264;
            font-size: 1.8em;
            margin-bottom: 10px;
            text-align: center;
        }
        h3 {
            color: #1e3264;
            font-size: 1.2em;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p {
            color: #555555;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }
        /* Pie de página */
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
            color: #777777;
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
<!-- Contenedor principal -->
<div class="container">
    <h2>SOBRE NOSOTROS</h2>
    <p>
        C.S.G Contratistas Generales es una empresa líder en el sector de carpintería metálica, comprometida con la calidad y la innovación. Con muchos años de experiencia, nos dedicamos a crear soluciones personalizadas que satisfacen las necesidades de nuestros clientes.
    </p>
    
    <h3>Misión</h3>
    <p>
        Nuestra misión es ofrecer productos y servicios de carpintería metálica que no solo cumplan, sino que superen las expectativas de nuestros clientes, garantizando la seguridad y la sostenibilidad en todos nuestros proyectos.
    </p>
    
    <h3>Visión</h3>
    <p>
        Aspiramos a ser reconocidos como los mejores en nuestra industria, siendo la primera opción en carpintería metálica en la región, mediante la innovación constante y un compromiso inquebrantable con la calidad.
    </p>
    
    <h3>Nuestras Especialidades</h3>
    <p>
    ➤ Diseño y fabricación de estructuras metálicas.<br>
    ➤ Instalación de barandas y cercos de seguridad.<br>
    ➤ Trabajos personalizados según requerimientos del cliente.<br>
    ➤ Cercos perimétricos.<br>
    ➤ Sistemas levadizos.<br>
    ➤Trabajos en melamina.<br>
    ➤ Instalación y trabajos en Drywall.<br>
    ➤ Mantenimiento y reparación de estructuras metálicas.
    </p>
    
    <h3>Valores</h3>
    <p>
        En C.S.G Contratistas Generales, creemos en la transparencia, el trabajo en equipo y el respeto por el medio ambiente. Cada proyecto es una oportunidad para demostrar nuestro compromiso con la excelencia.
    </p>
</div>

<!-- Pie de página -->
<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>

</body>
</html>
