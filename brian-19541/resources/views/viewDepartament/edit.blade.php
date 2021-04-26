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
                        Actualización de datos
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>

                        @endif

                        <form action="{{route('departament.update',['departament'=>$departament->id])}}" method="POST" novalidate>
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label for="name_departament">Nombre</label>
                                <input class="form-control col-md-auto"  type="text"  name="name_departament" id="name_departament" value="{{old('departament',$departament->name_departament)}}"
                                       required="required"
                                >
                                @if($errors->has('name_departament'))
                                    <p class="text-danger">{{$errors->first('name_departament')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="department_address">Nombre</label>
                                <input class="form-control col-md-auto"  type="text"  name="department_address" id="department_address" value="{{old('departament',$departament->department_address)}}"
                                       required="required"
                                >
                                @if($errors->has('department_address'))
                                    <p class="text-danger">{{$errors->first('department_address')}}</p>
                                @endif
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a href="{{ url()->previous() }}"   class="btn btn-outline-secondary">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
