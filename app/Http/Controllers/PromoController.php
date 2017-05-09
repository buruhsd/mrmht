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
        // try{

        //     $promos = new Promo;
        //     $promos->name = $request->json()->get('name');
        //     $promos->description = $request->json()->get('description');
        //     $promos->image = $request->image;
        //     $promos->save();

        // return response()->json(array('status'=>'ok','id'=>$promos->id));
        // } catch (\Illuminate\Database\QueryException $ex) {
        //   return response()->json(array('status'=>'error','message'=>$ex->getMessage()),400);
        // } catch (Exception $e){
        //   return response()->json(array('status'=>'error','message'=>$e->getMessage()),500);

        // }

            $img_string = $request->json()->get('image');
            $img_name = $request->json()->get('file_name');

            //decode base64 string
            $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string));

            $f = finfo_open();

            $mime_type = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);

            if($mime_type != null || $mime_type != ''){
                $mime_type_array = explode('/', $mime_type);

                $type = $mime_type_array[0];
                $extension = $mime_type_array[1];
            }else{
                return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
            }
            $name = uniqid();
            if ($type == 'image'){
                $png_url = 'images/'.$name.'.'.$extension;
                $path = public_path($png_url);
                $pub_url = url($png_url);
                file_put_contents($path, $image);

                $promo = new Promo;
                $promo->name = $request->json()->get('name');
                $promo->description = $request->json()->get('description');
                $promo->image = $pub_url;
                $promo->save();
                return response()->json(array('status' => 'ok','id'=>$promo->id,'url'=>$pub_url));
            }else{
                return response()->json(array('status' => 'error','message'=>'not image '.$mime_type),400);
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

            $promo = Promo::find($id);
            return response()->json($promo);
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
        $img_string = $request->json()->get('image');
            $img_name = $request->json()->get('file_name');

            //decode base64 string
            $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string));

            $f = finfo_open();

            $mime_type = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);

            if($mime_type != null || $mime_type != ''){
                $mime_type_array = explode('/', $mime_type);

                $type = $mime_type_array[0];
                $extension = $mime_type_array[1];
            }else{
                return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
            }
          
            $name = uniqid();
            if ($type == 'image'){
                $png_url = 'images/'.$name.'.'.$extension;
                $path = public_path($png_url);
                $pub_url = url($png_url);
                file_put_contents($path, $image);

                $promo = Promo::find($id);
                $promo->name = $request->json()->get('name');
                $promo->description = $request->json()->get('description');
                $promo->image = $pub_url;
                $promo->save();
                return response()->json(array('status' => 'ok','id'=>$promo->id,'url'=>$pub_url));
            }else{
                return response()->json(array('status' => 'error','message'=>'not image '.$mime_type),400);
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
          $promos = Promo::find($id);
          $promos->delete();
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
