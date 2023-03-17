<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatriculaPostRequest;
use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MatriculaRestController extends Controller
{
    public function index(){
    $matricula=Matricula::all();
    return response()->json($matricula,Response::HTTP_OK);
   }
   public function store(MatriculaPostRequest $request){
    $matricula=Matricula::create($request->all());
    return response()->json([
        'message'=> "Registro creado satisfractoriamente",
        'matricula'=> $matricula
    ],Response::HTTP_CREATED);
   }
   public function update(MatriculaPostRequest $request,$matricula){
    $matricula=Matricula::find($matricula);
    $matricula->update($request->only('idPeriodo','idMateria'));
    return response()->json([
        'message'=> "Registro actualizado",
        'matricula'=> $matricula
    ],Response::HTTP_CREATED);
   }
   public function destroy($matricula){
    $matricula=Matricula::find($matricula);
    $matricula->delete();
    return response()->json([
        'message'=> "Registro eliminado correctamente",
    ],Response::HTTP_OK);
   }
}
