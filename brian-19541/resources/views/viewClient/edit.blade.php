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

                        <form action="{{route('client.update',['client'=>$client->id])}}" method="POST" novalidate>
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label for="name_client">Nombre</label>
                                <input class="form-control col-md-auto"  type="text"  name="name_client" id="name_client" value="{{old('client',$client->name_client)}}"
                                       required="required"
                                >
                                @if($errors->has('name_client'))
                                    <p class="text-danger">{{$errors->first('name_client')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="birthday_date">Fecha Compleaños</label>
                                <input class="form-control col-md-auto"  type="date"  name="birthday_date" id="birthday_date" value="{{old('client',$client->birthday_date)}}"
                                       required="required"
                                >
                                @if($errors->has('birthday_date'))
                                    <p class="text-danger">{{$errors->first('birthday_date')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="age_client">Edad</label>
                                <input class="form-control col-md-auto"  type="number"  name="age_client" id="age_client" value="{{old('client',$client->age_client)}}"
                                       required="required"
                                >
                                @if($errors->has('age_client'))
                                    <p class="text-danger">{{$errors->first('age_client')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email_client">Correo Electronico</label>
                                <input class="form-control col-md-auto"  type="email"  name="email_client" id="email_client" value="{{old('client',$client->email_client)}}"
                                       required="required"
                                >
                                @if($errors->has('email_client'))
                                    <p class="text-danger">{{$errors->first('email_client')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="number_telefon">Número Teléfono</label>
                                <input class="form-control col-md-auto"  type="number"  name="number_telefon" id="number_telefon" value="{{old('client',$client->number_telefon)}}"
                                       required="required"
                                >
                                @if($errors->has('number_telefon'))
                                    <p class="text-danger">{{$errors->first('number_telefon')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="category_client">Categoria</label>
                                <select class="form-control" name="category_client" id="category_client" value="{{old('category_client')}}" required="required">

                                    @if(count($varCategory)>0)
                                        <option value="selected" > Seleccione Categoria
                                        @foreach($varCategory as $categorys)
                                            <option value="{{$categorys->id}}"> {{$categorys->name_category}}</option>
                                        @endforeach
                                    @else
                                        <option>No hay categorias disponibles</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender_client">Genero</label>
                                <select class="form-control" name="gender_client" id="gender_client" value="{{old('gender_client')}}" required="required">

                                    @if(count($varGender)>0)
                                        <option value="selected" > Seleccione Genero
                                        @foreach($varGender as $genders)
                                            <option value="{{$genders->id}}"> {{$genders->name_gender}}</option>
                                        @endforeach
                                    @else
                                        <option>No hay generos disponibles</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="departament_client">Departamento</label>
                                <select class="form-control" name="departament_client" id="departament_client" value="{{old('departament_client')}}" required="required">

                                    @if(count($varDepartament)>0)
                                        <option value="selected" > Seleccione Departamento
                                        @foreach($varDepartament as $departaments)
                                            <option value="{{$departaments->id}}"> {{$departaments->name_departament}}</option>
                                        @endforeach
                                    @else
                                        <option>No hay departamentos disponibles</option>
                                    @endif
                                </select>
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
    </div>
@endsection
