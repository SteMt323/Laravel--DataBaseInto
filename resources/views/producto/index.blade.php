@extends ('layouts.app')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <div class="container">
        @foreach ($producto as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
        </div>
        
    </tbody>
</table>
@endsection