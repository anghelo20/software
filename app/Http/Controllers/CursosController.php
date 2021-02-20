<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $dato = Users::join('persona', 'Users.fkCodigo', '=', 'persona.idCodigo')
                ->join('escuela', 'persona.fkEscuela', '=', 'escuela.idEscuela')
                ->select ('persona.ciclo_p')
                ->where('Users.id',$id)
                ->get();


        $data=Users::join('persona', 'Users.fkCodigo', '=', 'persona.idCodigo')
                    ->join ('escuela', 'persona.fkEscuela', '=', 'escuela.idEscuela')
                    ->join ('escuelacurso', 'escuela.idEscuela', '=', 'escuelacurso.fkEscuela')
                    ->join ('curso', 'escuelacurso.fkCurso', '=', 'curso.idCurso')
                    ->select ('Users.id','curso.idCurso','curso.tipo','curso.creditos','curso.ciclo','curso.nombre_curso','curso.h_teoria','curso.h_practica')
                    ->where([
                        ['Users.id', '=', $id],
                        ['curso.ciclo', '=', $dato[0]->ciclo_p],
                    ])
                    ->get();

                    return view('Cursos',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
