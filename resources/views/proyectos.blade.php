<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos | CSG Contratistas Generales</title>
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
            width: 90%;
            max-width: 1200px;
            background-color: #ffffff;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Títulos */
        h2 {
            color: #1e3264;
            font-size: 1.8em;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Galería en cuadrícula */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            text-align: center;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item p {
            padding: 10px;
            font-size: 14px;
            color: #333333;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.15);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
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
    <h2>Nuestros Proyectos</h2>
    <div class="gallery">
        <div class="gallery-item">
            <img src="css/imagenes/proyecto1.jpg" alt="Edificio El Pinar IV San Borja">
            <p>EDIFICIO EL PINAR IV SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto2.jpg" alt="Edificio La Pradera I San Borja">
            <p>EDIFICIO LA PRADERA I SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto3.jpg" alt="Edificio Pinar VI">
            <p>EDIFICIO PINAR VI</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto4.jpg" alt="Residencial Venecia">
            <p>EDIFICIO EL PINAR III SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto5.jpg" alt="Edificio El Pinar IV San Borja">
            <p>PINAR V SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto6.jpg" alt="Edificio La Pradera I San Borja">
            <p>RESIDENCIAL VENECIA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto7.jpg" alt="Edificio El Pinar IV San Borja">
            <p>COLEGIO GRAN UNIDAD JOSE GRANDA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto8.jpg" alt="Edificio La Pradera I San Borja">
            <p>PLAZA LIMA SUR</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto9.jpg" alt="Edificio Pinar VI">
            <p>TOTTUS DOMINICO CALLAO</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto10.jpg" alt="Residencial Venecia">
            <p>PROMART ATE</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto11.jpg" alt="Edificio El Pinar IV San Borja">
            <p>PASAMANO RAMPA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto12.jpg" alt="Edificio La Pradera I San Borja">
            <p>PLANTA VANGUARD ICA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto13.jpg" alt="Edificio El Pinar IV San Borja">
            <p>ESCALERA METALICA</p>
        </div>
        <div class="gallery-item">
            <img src="css/imagenes/proyecto14.jpg" alt="Edificio La Pradera I San Borja">
            <p>BARANDAS METALICAS</p>
        </div>
       
    </div>
</div>

<!-- Pie de página -->
<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>

</body>
</html>