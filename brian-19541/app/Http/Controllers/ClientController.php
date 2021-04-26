<?php


namespace App\Http\Controllers;


use App\Http\Request\ClientRequest;
use App\Models\Category;
use App\Models\ModelClient;
use App\Models\ModelDepartament;
use App\Models\ModelGender;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $joinDatosEnviados = ModelClient::join('category','client.category_client','category.id')->
        join('gender','client.gender_client','gender.id')->
            join('departament', 'client.departament_client', 'departament.id')->
        select('client.id','client.name_client',
            'client.birthday_date','client.age_client',
            'client.email_client','client.number_telefon',
            'category.name_category','gender.name_gender',
            'departament.name_departament'
        )->get();
        return view('viewClient.index', compact('joinDatosEnviados'));
    }


    public function create()
    {
        $varCategory = Category::all();
        $varGender = ModelGender::all();
        $varDepartament = ModelDepartament::all();
        return view('viewClient.create', compact('varCategory', 'varGender', 'varDepartament'));
    }

    public function store(ClientRequest $request)
    {
        //predeterminado
        $data = $request->validated();
        $client = ModelClient::create($data);
        return redirect()->route('client.index')->with('status', 'Cliente Registrado');

    }

    public function edit(Request $request, ModelClient $client)
    {
        $varCategory = Category::all();
        $varGender = ModelGender::all();
        $varDepartament = ModelDepartament::all();
        return view('viewClient.edit', compact('client', 'varCategory', 'varDepartament', 'varGender'));
    }

    public function update(ClientRequest $request, ModelClient $client)
    {
        $data = $request->validated();
        $client->fill($data);
        $client->save();
        return redirect()->route('client.index')->with('status', 'Datos actualizados');
    }

    public function destroy(Request $request, ModelClient $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('eliminar', 'ok');
    }
}
