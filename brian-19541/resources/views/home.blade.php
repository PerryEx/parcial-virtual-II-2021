@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Categoria</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{route('category.create')}}" class="btn btn-primary">Registro</a>
                            <a href="{{route('category.index')}}" class="btn btn-success">Ver</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Genero</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{route('gender.create')}}" class="btn btn-primary ">Registro</a>
                            <a href="{{route('gender.index')}}" class="btn btn-success">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Departamento</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{route('departament.create')}}" class="btn btn-primary">Registro</a>
                            <a href="{{route('departament.index')}}" class="btn btn-success">Ver</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cliente</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{route('client.create')}}" class="btn btn-primary">Registro</a>
                            <a href="{{route('client.index')}}" class="btn btn-success">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
