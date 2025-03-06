
   @extends('layout.app')
   @section('title')
   <title>Create Product</title>
   @endsection
   @section('content')
   <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 fw-bolder mb-5 mt-5">
                <span class="text-gradient d-inline">Crear Producto</span>
            </h1>
        </div>
        <div class="card p-4 shadow col-md-8 mx-auto">
            <form id="productForm">
                <!-- Nombre del Producto -->
                <div class="mb-3">
                    <label for="productName" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" id="productName" placeholder="Ej. Smartphone X" required>
                </div>

                <!-- Descripción -->
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Descripción</label>
                    <textarea class="form-control" id="productDescription" rows="3" placeholder="Escribe una breve descripción"
                        required></textarea>
                </div>

                <!-- Categoría -->
                <div class="mb-3">
                    <label for="productCategory" class="form-label">Categoría</label>
                    <select class="form-select" id="productCategory" required>
                        <option value="">Selecciona una categoría</option>
                        <option value="tecnologia">Tecnología</option>
                        <option value="ropa">Ropa</option>
                        <option value="hogar">Hogar</option>
                    </select>
                </div>

                <!-- Precio -->
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="productPrice" placeholder="Ej. 199.99" step="0.01"
                        min="0" required>
                </div>

                <!-- Imagen (URL) -->
                <div class="mb-3">
                    <label for="productImage" class="form-label">URL de la Imagen</label>
                    <input type="url" class="form-control" id="productImage"
                        placeholder="Ej. https://imagen.com/foto.jpg" required>
                </div>

                <!-- Botón Crear -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Crear Producto</button>
                </div>
            </form>
        </div>
    </div>
@endsection