<?php

namespace App\Http\Controllers;


use App\Http\Request\categoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{

    public function index()
    {
        $category = Category::paginate(5);
        return view('category.index')->with('category', $category);
    }


    public function create()
    {
        return view('category.create');
    }

    public function store(categoryRequest $request)
    {
        //predeterminado
        $data = $request->validated();
        $category = Category::create($data);
        return redirect()->route('category.index')->with('status', 'Categoria registrada');

    }

    public function edit(Request $request, Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(categoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->fill($data);
        $category->save();
        return redirect()->route('category.index')->with('status', 'Datos actualizados');
    }

    public function destroy(Request $request, Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('eliminar', 'ok');
    }
}
