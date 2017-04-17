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
        // try {

        // $products = new Product;

        // $products->name = $request->json()->get('name');
        // $products->description = $request->json()->get('description');
        // $products->merk = $request->json()->get('merk');
        // $products->price1 = $request->json()->get('price1');
        // $products->price2 = $request->json()->get('price2');
        // $products->price3 = $request->json()->get('price3');
        // $products->price4 = $request->json()->get('price4');
        // $products->category_id = $request->json()->get('category_id');
        // $products->save();

        // return response()->json(array('status'=>'ok','id'=>$products->id));
        // } catch (\Illuminate\Database\QueryException $ex) {
        //   return response()->json(array('status'=>'error','message'=>$ex->getMessage()),400);
        // } catch (Exception $e){
        //   return response()->json(array('status'=>'error','message'=>$e->getMessage()),500);

        // }
            $img_string1 = $request->json()->get('image1');
            $img_string2 = $request->json()->get('image2');
            $img_string3 = $request->json()->get('image3');
            $img_string4 = $request->json()->get('image4');
            $img_string5 = $request->json()->get('image5');
            $img_string6 = $request->json()->get('image6');
            $img_name = $request->json()->get('file_name');

            //decode base64 string
            $image1 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string1));
            $image2 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string2));
            $image3 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string3));
            $image4 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string4));
            $image5 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string5));
            $image6 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string6));
            $f = finfo_open();

            $mime_type1 = finfo_buffer($f, $image1, FILEINFO_MIME_TYPE);
            $mime_type2 = finfo_buffer($f, $image2, FILEINFO_MIME_TYPE);
            $mime_type3 = finfo_buffer($f, $image3, FILEINFO_MIME_TYPE);
            $mime_type4 = finfo_buffer($f, $image4, FILEINFO_MIME_TYPE);
            $mime_type5 = finfo_buffer($f, $image5, FILEINFO_MIME_TYPE);
            $mime_type6 = finfo_buffer($f, $image6, FILEINFO_MIME_TYPE);

            if($mime_type1 != null || $mime_type1 != '' || $mime_type2 != null || $mime_type2 != '' || $mime_type3 != null || $mime_type3 != '' || $mime_type4 != null || $mime_type4 != '' || $mime_type5 != null || $mime_type5 != '' || $mime_type6 != null || $mime_type6 != ''){

                $mime_type_array1 = explode('/', $mime_type1);
                $type1 = $mime_type_array1[0];
                $extension1 = $mime_type_array1[1];

                if ($mime_type2 != null || $mime_type2 != '') {
                    $mime_type_array2 = explode('/', $mime_type2);

                    $type2 = $mime_type_array2[0];
                    $extension2 = $mime_type_array2[1];
                }
                if ($mime_type3 != null || $mime_type3 != '') {
                    $mime_type_array3 = explode('/', $mime_type3);

                    $type3 = $mime_type_array3[0];
                    $extension3 = $mime_type_array3[1];
                }
                if ($mime_type4 != null || $mime_type4 != '') {
                    $mime_type_array4 = explode('/', $mime_type4);

                    $type4 = $mime_type_array4[0];
                    $extension4 = $mime_type_array4[1];
                }
                if ($mime_type5 != null || $mime_type5 != '') {
                    $mime_type_array5 = explode('/', $mime_type5);

                    $type5 = $mime_type_array5[0];
                    $extension5 = $mime_type_array5[1];
                }
                if ($mime_type6 != null || $mime_type6 != '') {
                    $mime_type_array6 = explode('/', $mime_type6);

                    $type6 = $mime_type_array6[0];
                    $extension6 = $mime_type_array6[1];
                }
            }else{
                return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
            }
            $name1 = uniqid();

            if ($type1 == 'image'){
                $png_url1 = 'images/'.$name1.'.'.$extension1;
                $path1 = public_path($png_url1);
                $pub_url1 = url($png_url1);
                file_put_contents($path1, $image1);

                if ($type2 == 'image') {
                    $name2 = uniqid(); 
                    $png_url2 = 'images/'.$name2.'.'.$extension2;
                    $path2 = public_path($png_url2);
                    $pub_url1 = url($png_url2);
                    file_put_contents($path2, $image2);
                }

                if ($type3 == 'image') {
                    $name3 = uniqid(); 
                    $png_url3 = 'images/'.$name3.'.'.$extension3;
                    $path3 = public_path($png_url3);
                    $pub_url3 = url($png_url3);
                    file_put_contents($path3, $image3);
                }

                if ($type4 == 'image') {
                    $name4 = uniqid(); 
                    $png_url4 = 'images/'.$name4.'.'.$extension4;
                    $path4 = public_path($png_url4);
                    $pub_url4 = url($png_url4);
                    file_put_contents($path4, $image4);
                }

                if ($type5 == 'image') {
                    $name5 = uniqid(); 
                    $png_url5 = 'images/'.$name5.'.'.$extension5;
                    $path5 = public_path($png_url5);
                    $pub_url5 = url($png_url5);
                    file_put_contents($path5, $image5);
                }

                if ($type6 == 'image') {
                    $name6 = uniqid(); 
                    $png_url6 = 'images/'.$name6.'.'.$extension6;
                    $path6 = public_path($png_url6);
                    $pub_url6 = url($png_url6);
                    file_put_contents($path6, $image6);
                }

                $products = new Product;

                $products->name = $request->json()->get('name');
                $products->description = $request->json()->get('description');
                $products->merk = $request->json()->get('merk');
                $products->size = $request->json()->get('size');
            	$products->stock = $request->json()->get('stock');
                $products->price1 = $request->json()->get('price1');
                $products->price2 = $request->json()->get('price2');
                $products->price3 = $request->json()->get('price3');
                $products->price4 = $request->json()->get('price4');
                $products->price5 = $request->json()->get('price5');
                $products->price6 = $request->json()->get('price6');
                var_dump('1');
                if ($pub_url1) {
                    $products->image1 = $pub_url1;
                }
                if ($pub_url2) {
                    $products->image2 = $pub_url2;
                }
                if ($pub_url3) {
                    $products->image3 = $pub_url3;
                }
                
                if ($png_url4) {
                    $products->image4 = $pub_url4;
                }
                var_dump('1');
                if ($pub_url5 != null) {
                    $products->image5 = $pub_url5;
                }
                if ($png_url6) {
                    $products->image6 = $pub_url6;
                }
                
                $products->category_id = $request->json()->get('category_id');
                $products->save();
                return response()->json(array('status' => 'ok','id'=>$products->id));
            }else{
                return response()->json(array('status' => 'error','message'=>'not image '.$mime_type1),400);
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
            $products->size = $request->json()->get('size');
            $products->stock = $request->json()->get('stock');
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
