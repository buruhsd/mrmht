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
        $products = Product::Orderby('id','DESC')->get();
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
        
            $img_string = $request->json()->get('image1');
            $img_name = $request->json()->get('file_name');
            $img_string2 = $request->json()->get('image2');
            $img_name2 = $request->json()->get('file_name');
            $img_string3 = $request->json()->get('image3');
            $img_name3 = $request->json()->get('file_name');
            $img_string4 = $request->json()->get('image4');
            $img_name4 = $request->json()->get('file_name');
            $img_string5 = $request->json()->get('image5');
            $img_name5 = $request->json()->get('file_name');
            $img_string6 = $request->json()->get('image6');
            $img_name6 = $request->json()->get('file_name');

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

            if ($img_string2) {
                $image2 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string2));

                $f = finfo_open();

                $mime_type2 = finfo_buffer($f, $image2, FILEINFO_MIME_TYPE);

                if($mime_type2 != null || $mime_type2 != ''){
                    $mime_type_array = explode('/', $mime_type2);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name2 = uniqid();
            }

            if ($img_string3) {
                $image3 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string3));

                $f = finfo_open();

                $mime_type3 = finfo_buffer($f, $image3, FILEINFO_MIME_TYPE);

                if($mime_type3 != null || $mime_type3 != ''){
                    $mime_type_array = explode('/', $mime_type3);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name3 = uniqid();
            }

            if ($img_string4) {
                $image4 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string4));

                $f = finfo_open();

                $mime_type4 = finfo_buffer($f, $image4, FILEINFO_MIME_TYPE);

                if($mime_type4 != null || $mime_type4 != ''){
                    $mime_type_array = explode('/', $mime_type4);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name4 = uniqid();
            }

            if ($img_string5) {
                $image5 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string5));

                $f = finfo_open();

                $mime_type5 = finfo_buffer($f, $image5, FILEINFO_MIME_TYPE);

                if($mime_type5 != null || $mime_type5 != ''){
                    $mime_type_array = explode('/', $mime_type5);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name5 = uniqid();
            }

            if ($img_string6) {
                $image6 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string6));

                $f = finfo_open();

                $mime_type6 = finfo_buffer($f, $image6, FILEINFO_MIME_TYPE);

                if($mime_type6 != null || $mime_type6 != ''){
                    $mime_type_array = explode('/', $mime_type6);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name6 = uniqid();
            }
           
                $png_url = 'images/'.$name.'.'.$extension;
                $path = public_path($png_url);
                $pub_url = url($png_url);
                file_put_contents($path, $image);

                if ($img_string2) {
                    $png_url2 = 'images/'.$name2.'.'.$extension;
                    $path = public_path($png_url2);
                    $pub_url2 = url($png_url2);
                    file_put_contents($path, $image2);
                }
                

                if ($img_string3) {
                    # code...
                    $png_url3 = 'images/'.$name3.'.'.$extension;
                    $path = public_path($png_url3);
                    $pub_url3 = url($png_url3);
                    file_put_contents($path, $image3);
                }

                if ($img_string4) {
                    # code...
                    $png_url4 = 'images/'.$name4.'.'.$extension;
                    $path = public_path($png_url4);
                    $pub_url4 = url($png_url4);
                    file_put_contents($path, $image4);
                }

                if ($img_string5) {
                    # code...
                    $png_url5 = 'images/'.$name5.'.'.$extension;
                    $path = public_path($png_url5);
                    $pub_url5 = url($png_url5);
                    file_put_contents($path, $image5);

                }

                if ($img_string6) {
                    # code...
                    $png_url6 = 'images/'.$name6.'.'.$extension;
                    $path = public_path($png_url6);
                    $pub_url6 = url($png_url6);
                    file_put_contents($path, $image6);
                }

                
                

                $products = new product;
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
                $products->image1 = $pub_url;
                if ($img_string2) {
                    $products->image2 = $pub_url2;
                }

                if ($img_string3) {
                    $products->image3 = $pub_url3;
                }
                
                if ($img_string4) {
                    $products->image4 = $pub_url4;
                }
                
                if ($img_string5) {
                    $products->image5 = $pub_url5;
                }

                if ($img_string6) {
                    $products->image6 = $pub_url6;
                }
                
                
                $products->size = $request->json()->get('size');
                $products->stock = $request->json()->get('stock');
                $products->category_id = $request->json()->get('category_id');
                $products->save();
                return response()->json(array('status' => 'ok','id'=>$products->id,'url'=>$pub_url));
           

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
        $img_string = $request->json()->get('image1');
            $img_name = $request->json()->get('file_name');
            $img_string2 = $request->json()->get('image2');
            $img_name2 = $request->json()->get('file_name');
            $img_string3 = $request->json()->get('image3');
            $img_name3 = $request->json()->get('file_name');
            $img_string4 = $request->json()->get('image4');
            $img_name4 = $request->json()->get('file_name');
            $img_string5 = $request->json()->get('image5');
            $img_name5 = $request->json()->get('file_name');
            $img_string6 = $request->json()->get('image6');
            $img_name6 = $request->json()->get('file_name');

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

            if ($img_string2) {
                $image2 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string2));

                $f = finfo_open();

                $mime_type2 = finfo_buffer($f, $image2, FILEINFO_MIME_TYPE);

                if($mime_type2 != null || $mime_type2 != ''){
                    $mime_type_array = explode('/', $mime_type2);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name2 = uniqid();
            }

            if ($img_string3) {
                $image3 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string3));

                $f = finfo_open();

                $mime_type3 = finfo_buffer($f, $image3, FILEINFO_MIME_TYPE);

                if($mime_type3 != null || $mime_type3 != ''){
                    $mime_type_array = explode('/', $mime_type3);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name3 = uniqid();
            }

            if ($img_string4) {
                $image4 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string4));

                $f = finfo_open();

                $mime_type4 = finfo_buffer($f, $image4, FILEINFO_MIME_TYPE);

                if($mime_type4 != null || $mime_type4 != ''){
                    $mime_type_array = explode('/', $mime_type4);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name4 = uniqid();
            }

            if ($img_string5) {
                $image5 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string5));

                $f = finfo_open();

                $mime_type5 = finfo_buffer($f, $image5, FILEINFO_MIME_TYPE);

                if($mime_type5 != null || $mime_type5 != ''){
                    $mime_type_array = explode('/', $mime_type5);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name5 = uniqid();
            }

            if ($img_string6) {
                $image6 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img_string6));

                $f = finfo_open();

                $mime_type6 = finfo_buffer($f, $image6, FILEINFO_MIME_TYPE);

                if($mime_type6 != null || $mime_type6 != ''){
                    $mime_type_array = explode('/', $mime_type6);

                    $type = $mime_type_array[0];
                    $extension = $mime_type_array[1];
                }else{
                    return response()->json(array('status' => 'error','message'=>'file is empty.'),400);
                }
                $name6 = uniqid();
            }

                $products = product::find($id);
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
                $products->image1 = $pub_url;
                $products->image2 = $pub_url2;
                $products->image3 = $pub_url3;
                $products->image4 = $pub_url4;
                $products->image5 = $pub_url5;
                $products->image6 = $pub_url6;
                $products->size = $request->json()->get('size');
                $products->stock = $request->json()->get('stock');
                $products->category_id = $request->json()->get('category_id');
                $products->save();
                return response()->json(array('status' => 'ok','id'=>$products->id,'url'=>$pub_url));
           
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
