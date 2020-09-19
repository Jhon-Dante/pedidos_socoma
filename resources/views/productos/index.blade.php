@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Productos</div>

                <div class="card-body">
                    <a href="#" class="btn btn-primary float-right">Nuevo Producto</a>
                </div>
            </div>
        </div>
        <example-component></example-component>
    </div>
</div>
@endsection
