<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
//use DB;  // jv

class RequisitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //aqui



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
        dd($request->ficha);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        


        $data=Users::join('persona', 'Users.fkCodigo', '=', 'persona.idCodigo')
                    ->join ('requisitos', 'persona.idCodigo', '=', 'requisitos.fkCodigo')
                    ->select ('requisitos.voucher', 'requisitos.encuesta', 'requisitos.ficha', 'Users.id')
                    ->where('Users.id',$id)
                    ->get();
            
          $voucher = $data[0]->voucher;
          $encuesta = $data[0]->encuesta;
          $ficha = $data[0]->ficha;
          $active="";


          
          if($voucher == "true" && $encuesta == "true" && $ficha == "true" ){
            $active = true;
          }else{
            $active = false;
          }
        
       return view('Requisitos',compact('data','active'));
             
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
