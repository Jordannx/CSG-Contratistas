<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Servicios</title>
    @include('navbar')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        h1, h2 {
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
<div class="container mt-5">
    <h1 class="mb-4 text-primary">Lista de Servicios</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="servicesTable">
            <tr>
                <td>Drywall</td>
                <td>C.S.G CONTRATISTAS GENERALES se especializa en la instalación...</td>
                <td>S/. 3,600.00</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="viewService('Drywall', 'C.S.G CONTRATISTAS GENERALES se especializa en la instalación...', 3600)">Ver</button>
                    <button class="btn btn-warning btn-sm" onclick="editService(this, 'Drywall', 'C.S.G CONTRATISTAS GENERALES se especializa en la instalación...', 3600)">Editar</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteService(this)">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Melamina</td>
                <td>En C.S.G CONTRATISTAS GENERALES ofrecemos un servicio integral...</td>
                <td>S/. 6,000.00</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="viewService('Melamina', 'En C.S.G CONTRATISTAS GENERALES ofrecemos un servicio integral...', 6000)">Ver</button>
                    <button class="btn btn-warning btn-sm" onclick="editService(this, 'Melamina', 'En C.S.G CONTRATISTAS GENERALES ofrecemos un servicio integral...', 6000)">Editar</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteService(this)">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-success mt-3" onclick="createService()">Crear Nuevo Servicio</button>
</div>

<!-- Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="serviceForm">
                    <div class="mb-3">
                        <label for="serviceName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="serviceName" required>
                    </div>
                    <div class="mb-3">
                        <label for="serviceDescription" class="form-label">Descripción</label>
                        <textarea class="form-control" id="serviceDescription" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="servicePrice" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="servicePrice" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Pie de página -->
<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const serviceModal = new bootstrap.Modal(document.getElementById('serviceModal'));
    let editingRow = null; // Variable para rastrear la fila en edición

    // Ver servicio
    function viewService(name, description, price) {
        document.getElementById('serviceModalLabel').textContent = 'Ver Servicio';
        document.getElementById('serviceName').value = name;
        document.getElementById('serviceDescription').value = description;
        document.getElementById('servicePrice').value = price;
        document.getElementById('serviceName').disabled = true;
        document.getElementById('serviceDescription').disabled = true;
        document.getElementById('servicePrice').disabled = true;
        serviceModal.show();
    }

    // Editar servicio
    function editService(row, name, description, price) {
        document.getElementById('serviceModalLabel').textContent = 'Editar Servicio';
        document.getElementById('serviceName').value = name;
        document.getElementById('serviceDescription').value = description;
        document.getElementById('servicePrice').value = price;
        document.getElementById('serviceName').disabled = false;
        document.getElementById('serviceDescription').disabled = false;
        document.getElementById('servicePrice').disabled = false;
        editingRow = row.closest('tr'); // Guardar la fila en edición
        serviceModal.show();
    }

    // Eliminar servicio
    function deleteService(row) {
        if (confirm('¿Estás seguro de eliminar este servicio?')) {
            row.closest('tr').remove();
        }
    }

    // Crear un nuevo servicio
    function createService() {
        document.getElementById('serviceModalLabel').textContent = 'Crear Nuevo Servicio';
        document.getElementById('serviceForm').reset();
        document.getElementById('serviceName').disabled = false;
        document.getElementById('serviceDescription').disabled = false;
        document.getElementById('servicePrice').disabled = false;
        editingRow = null; // No hay fila en edición
        serviceModal.show();
    }

    // Guardar cambios
    document.getElementById('serviceForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const name = document.getElementById('serviceName').value;
        const description = document.getElementById('serviceDescription').value;
        const price = document.getElementById('servicePrice').value;

        if (editingRow) {
            // Actualizar una fila existente
            editingRow.cells[0].textContent = name;
            editingRow.cells[1].textContent = description;
            editingRow.cells[2].textContent = `S/. ${price}`;
        } else {
            // Crear una nueva fila
            const newRow = `
                <tr>
                    <td>${name}</td>
                    <td>${description}</td>
                    <td>S/. ${price}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" onclick="viewService('${name}', '${description}', ${price})">Ver</button>
                        <button class="btn btn-warning btn-sm" onclick="editService(this, '${name}', '${description}', ${price})">Editar</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteService(this)">Eliminar</button>
                    </td>
                </tr>
            `;
            document.getElementById('servicesTable').insertAdjacentHTML('beforeend', newRow);
        }

        // Cerrar el modal
        serviceModal.hide();
    });
</script>

</body>
</html>
