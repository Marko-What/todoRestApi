<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\opravilo;


//use Illuminate\Support\Facades\Validator;
use App\Http\Requests\createUpdateRequest;

class ApiCrud extends Controller
{

 

   public function index(){
       
        return opravilo::all();
   } /*end of index */



    public function store(createUpdateRequest $request){

       $validated = $request->validated();
       $opravilo = opravilo::create($request->all());
       return response()->json($opravilo, 201);

   } /*end of store */





     public function show(opravilo $opravilo){

         return $opravilo;
    } /*end of show */





    public function update(createUpdateRequest $request, opravilo $opravilo){
   
        
         /*     $validator = Validator::make($request->all(), [
               'naziv' => 'required|string|max:150',
               'oseba' => 'required|string|max:150',
               'opis' => 'required|string|max:1750',
               'datumZakljucevanja' => 'date',
               'zakljuceno' => 'boolean'
           ]);

			    if ($validator->fails()) {
                return response()->json("invalid data type", 400);
           }
      */

          $validated = $request->validated();

          $opravilo->update($request->all());
        return response()->json($opravilo, 200);

  
   } /*end of update */



  
 

    public function delete(opravilo $opravilo){
       
        $opravilo->delete();
        return response()->json(null, 204);

   } /*end of delete */



    






}
