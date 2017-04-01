<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::get();
        return response()->json($category);
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

        $categories = new Category;

        $categories->name = $request->json()->get('name');
        $categories->description = $request->json()->get('description');
        $categories->save();

        return response()->json(array('status'=>'ok','id'=>$categories->id));
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

            $categories = Category::find($id);
            return response()->json($categories);
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
        try {

        $categories = Category::find($id);

        $categories->name = $request->json()->get('name');
        $categories->description = $request->json()->get('description');
        $categories->save();

        return response()->json(array('status'=>'ok','id'=>$categories->id));
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
          $categories = Category::find($id);
          $categories->delete();
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
