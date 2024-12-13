@extends ('layouts.app')
@section('content')
<div class="container">
    <h2> Productos</h2>
    <a href="{{ route('producto.create') }}" class="btn btn-primary">Crear Producto</a>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($producto as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('producto.show', $product->id )}}" class="btn btn-info">{{ __('Show') }}</a>
                    <a href="{{ route('producto.edit', $product->id )}}" class="btn btn-warning">{{ __('Edit') }}</a>
                    <form action="{{ route('producto.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection