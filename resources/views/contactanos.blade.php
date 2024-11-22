<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos | CSG Contratistas Generales</title>
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
            width: 800px;
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
        /* Estilos del formulario */
        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            text-align: left;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-container textarea {
            resize: none;
            height: 100px;
        }

        .form-container button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #0056b3;
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
    <h2>Contáctanos</h2>
    <div class="form-container">
        <form action="#" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

            <label for="phone">Teléfono:</label>
            <input type="tel" id="phone" name="phone" placeholder="Ingresa tu teléfono" required>

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí" required></textarea>

            <label for="service">Servicio de Interés:</label>
            <select id="service" name="service" required>
                <option value="drywall">Drywall</option>
                <option value="carpinteria">Carpintería</option>
                <option value="metalica">Carpintería Metálica</option>
                <option value="otro">Otro</option>
            </select>

            <button type="submit">Enviar</button>
        </form>
    </div>
</div>

<!-- Pie de página -->
<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>

</body>
</html>