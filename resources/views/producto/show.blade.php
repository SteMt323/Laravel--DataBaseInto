@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $producto->name }}</h1>
    <p>{{ $producto->description }}</p>
    <p>Price: ${{ $producto->price }}</p>
    <a href="{{ route('producto.index') }}" class="btn btn-primary">Back to Products</a>
</div>

@endsection