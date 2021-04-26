@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header"   style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                <i class="fas fa-warehouse fa-1x"></i>Clientes
            </div>
            <div class="card-body">

                <table class="table table-striped">

                    @if(count($joinDatosEnviados))
                        <thead>
                        <tr class="text-center" >

                            <th scope="col">{{__('Nombre')}}</th>
                            <th scope="col">{{__('Fecha Cumpleaños')}}</th>
                            <th scope="col">{{__('Edad')}}</th>
                            <th scope="col">{{__('Correo Electronico')}}</th>
                            <th scope="col">{{__('Número Teléfono')}}</th>
                            <th scope="col">{{__('Categoria')}}</th>
                            <th scope="col">{{__('Género')}}</th>
                            <th scope="col">{{__('Departamento')}}</th>
                            <th scope="col">{{__('Editar')}}</th>
                            <th scope="col">{{__('Eliminar')}}</th>
                        </tr>

                        </thead>
                    @endif
                    <tbody>
                    @forelse($joinDatosEnviados as $clients)
                        <tr class="text-center">

                            <td>{{$clients->name_client}}</td>
                            <td>{{$clients->birthday_date}}</td>
                            <td>{{$clients->age_client}}</td>
                            <td>{{$clients->email_client}}</td>
                            <td>{{$clients->number_telefon}}</td>
                            <td>{{$clients->name_category}}</td>
                            <td>{{$clients->name_client}}</td>
                            <td>{{$clients->name_departament}}</td>

                            <td>
                                <a href="{{route('client.edit',['client'=>$clients])}}">
                                    <button type="button" class="btn btn-outline-success">{{__('Editar')}}</button>
                                </a>
                            </td>
                            <td>
                                <form id="delete-client-{{$clients->id}}" action="{{route('client.destroy',['client'=>$clients])}}" method="POST" class="     sweetalert-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">{{__('Eliminar')}}</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <p class="text-center">No existe registros</p>
                    @endforelse
                    </tbody>
                </table>
                <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>
            </div>
        </div>

    </div>

@endsection
