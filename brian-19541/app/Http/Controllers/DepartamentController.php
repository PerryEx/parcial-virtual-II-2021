<?php


namespace App\Http\Controllers;


use App\Http\Request\DepartamentRequest;
use App\Models\ModelDepartament;
use Illuminate\Http\Request;

class DepartamentController
{
    public function index()
    {
        $departament = ModelDepartament::paginate(5);
        return view('viewDepartament.index')->with('viewDepartament', $departament);
    }


    public function create()
    {
        return view('viewDepartament.create');
    }

    public function store(DepartamentRequest $request)
    {
        //predeterminado
        $data = $request->validated();
        $departament = ModelDepartament::create($data);
        return redirect()->route('departament.index')->with('status', 'Departamento Registrado');

    }

    public function edit(Request $request, ModelDepartament $departament)
    {
        return view('viewDepartament.edit', compact('departament'));
    }

    public function update(DepartamentRequest $request, ModelDepartament $departament)
    {
        $data = $request->validated();
        $departament->fill($data);
        $departament->save();
        return redirect()->route('departament.index')->with('status', 'Datos actualizados');
    }

    public function destroy(Request $request, ModelDepartament $departament)
    {
        $departament->delete();
        return redirect()->route('departament.index')->with('eliminar', 'ok');
    }
}
