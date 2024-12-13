@extends ('layouts.app')
@section ('content')

<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('producto.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre del Producto:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $producto->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea class="form-control" id="description" name="description" required>{{ $producto->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $producto->price }}" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="iva" name="iva" {{ $producto->iva ? 'checked' : '' }}>
            <label class="form-check-label" for="iva">IVA</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="discount" name="discount" {{ $producto->discount ? 'checked' : '' }}>
            <label class="form-check-label" for="discount">Descuento</label>
        </div>
        <div class="form-group">
            <label for="discount_percent">Porcentaje de Descuento:</label>
            <input type="number" class="form-control" id="discount_percent" name="discount_percent" value="{{ $producto->discount_percent }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    </form>
</div>

@endsection