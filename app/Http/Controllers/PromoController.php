<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promos = Promo::get();

        return response()->json($promos);
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
        try{

            $promos = new Promo;
            $promos->name = $request->json()->get('name');
            $promos->description = $request->json()->get('description');
            $promos->image = $request->image;
            $promos->save();

        return response()->json(array('status'=>'ok','id'=>$promos->id));
        } catch (\Illuminate\Database\QueryException $ex) {
          return response()->json(array('status'=>'error','message'=>$ex->getMessage()),400);
        } catch (Exception $e){
          return response()->json(array('status'=>'error','message'=>$e->getMessage()),500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
