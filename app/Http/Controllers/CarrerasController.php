<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carreras;

class CarrerasController extends Controller
{
    public function index()
    {
        $carreras = Carreras::all();
        return view('carreras',compact('carreras'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $carrera = new Carreras($request->input());
        $carrera->saveOrFail();
        return redirect('carreras');
    }

    public function show($id)
    {
        $carrera = Carreras::find($id);
        return view('editCarrera',compact('carrera'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $carrera = Carreras::find($id);
        $carrera->fill($request->input())->saveOrFail();
        return redirect('carreras');
    }

    public function destroy($id)
    {
        $carrera = Carreras::find($id);
        $carrera->delete();
        return redirect('carreras');
    }
}
