<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::get();
        return response()->json($products);
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
        // var_dump($request->isjson()); die();
        try {

        $products = new Product;

        $products->name = $request->json()->get('name');
        $products->description = $request->json()->get('description');
        $products->merk = $request->json()->get('merk');
        $products->price1 = $request->json()->get('price1');
        $products->price2 = $request->json()->get('price2');
        $products->price3 = $request->json()->get('price3');
        $products->price4 = $request->json()->get('price4');
        $products->category_id = $request->json()->get('category_id');
        $products->save();

        return response()->json(array('status'=>'ok','id'=>$products->id));
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
        try {
          $products = Product::find($id);
          return response()->json($products);
        } catch (Exception $e) {
          return response()->json(array('status' => 'error','message' => $e->getMessage() ));
        }
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
        // var_dump($request->all()); die();
        try{
            $products = Product::find($id);

            $products->name = $request->json()->get('name');
            $products->description = $request->json()->get('description');
            $products->merk = $request->json()->get('merk');
            $products->price1 = $request->json()->get('price1');
            $products->price2 = $request->json()->get('price2');
            $products->price3 = $request->json()->get('price3');
            $products->price4 = $request->json()->get('price4');
            $products->category_id = $request->json()->get('category_id');
            $products->save();

            return response()->json(array('status'=>'ok','id'=>$products->id));
        } catch (\Illuminate\Database\QueryException $ex) {
          return response()->json(array('status'=>'error','message'=>$ex->getMessage()),400);
        } catch (Exception $e){
          return response()->json(array('status'=>'error','message'=>$e->getMessage()),500);

        }
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
        try {
          $products = Product::find($id);
          $products->delete();
          return response()->json(array('status'=>'ok','message'=>'Item deleted'));

        }
        catch(\Illuminate\Database\QueryException $ex){
          return response()->json(array('status'=>'error','message'=>$ex->getMessage()));
        }
         catch (Exception $e) {
          return response()->json(array('status'=>'error','message'=>$e->getMessage()));
        }

    }
}
