<?php


namespace App\Http\Controllers;


use App\Http\Request\GenderRequest;
use App\Models\ModelGender;
use Illuminate\Http\Request;

class GenderController
{
    public function index()
    {
        $gender = ModelGender::paginate(5);
        return view('viewGender.index')->with('viewGender', $gender);
    }


    public function create()
    {
        return view('viewGender.create');
    }

    public function store(GenderRequest $request)
    {
        //predeterminado
        $data = $request->validated();
        $gender = ModelGender::create($data);
        return redirect()->route('gender.index')->with('status', 'Genero registrada');

    }

    public function edit(Request $request, ModelGender $gender)
    {
        return view('viewGender.edit', compact('gender'));
    }

    public function update(GenderRequest $request, ModelGender $gender)
    {
        $data = $request->validated();
        $gender->fill($data);
        $gender->save();
        return redirect()->route('gender.index')->with('status', 'Datos actualizados');
    }

    public function destroy(Request $request, ModelGender $gender)
    {
        $gender->delete();
        return redirect()->route('gender.index')->with('eliminar', 'ok');
    }
}
