<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaction = Transaction::get();
        return response()->json($transaction);
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
        try {

        $transaction = new Transaction;

        $transaction->name = $request->json()->get('name');
        $transaction->product_name = $request->json()->get('product_name');
        $transaction->total_product = $request->json()->get('total_product');
        $transaction->total_price = $request->json()->get('total_price');
        $categories->save();

        return response()->json(array('status'=>'ok','id'=>$transaction->id));
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
        try {

        $transaction = Transaction::find($id);

        $transaction->name = $request->json()->get('name');
        $transaction->product_name = $request->json()->get('product_name');
        $transaction->total_product = $request->json()->get('total_product');
        $transaction->total_price = $request->json()->get('total_price');
        $categories->save();

        return response()->json(array('status'=>'ok','id'=>$transaction->id));
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
          $transaction = Transaction::find($id);
          $transaction->delete();
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
