@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">

                    <div class="card-header" style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                        Registro de Categoria
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul> @endif <form action="{{route('category.store')}}" id="dynamic_form" method="POST" novalidate>
                            @csrf

                            <div class="form-group">
                                <label for="name_category">Nombre</label>
                                <input class="form-control col-md-auto"  type="text"  name="name_category" id="name_category" value="{{old('name_category')}}" maxlength="50"
                                       required="required"
                                >
                                @if($errors->has('name_category'))
                                    <p class="text-danger">{{$errors->first('name_category')}}</p>
                                @endif
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


