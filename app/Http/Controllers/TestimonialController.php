<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testi = Testimonial::get();
        return response()->json($testi);
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
            $img_string = $request->json()->get('image');
            $img_name = $request->json()->get('file_name');
            $img_string2 = $request->json()->get('image');
            $img_name2 = $request->json()->get('file_name');

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
            

            
                $png_url = 'images/'.$name.'.'.$extension;
                $path = public_path($png_url);
                $pub_url = url($png_url);
                file_put_contents($path, $image);

                $png_url2 = 'images/'.$name2.'.'.$extension;
                $path = public_path($png_url2);
                $pub_url2 = url($png_url2);
                file_put_contents($path, $image2);

                $testi = new Testimonial;
                $testi->name = $request->json()->get('name');
                $testi->testi = $request->json()->get('testi');
                $testi->image = $pub_url;
                $testi->image2 = $pub_url2;
                $testi->save();
                return response()->json(array('status' => 'ok','id'=>$testi->id,'url'=>$pub_url));
            
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

            $testi = Testimonial::find($id);
            return response()->json($testi);
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
            $img_string2 = $request->json()->get('image');
            $img_name2 = $request->json()->get('file_name');

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
            

            
                $png_url = 'images/'.$name.'.'.$extension;
                $path = public_path($png_url);
                $pub_url = url($png_url);
                file_put_contents($path, $image);

                $png_url2 = 'images/'.$name2.'.'.$extension;
                $path = public_path($png_url2);
                $pub_url2 = url($png_url2);
                file_put_contents($path, $image2);

                $testi = Testimonial::find($id);
                $testi->name = $request->json()->get('name');
                $testi->testi = $request->json()->get('testi');
                $testi->image = $pub_url;
                $testi->image2 = $pub_url2;
                $testi->save();
                return response()->json(array('status' => 'ok','id'=>$testi->id,'url'=>$pub_url));

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
          $testi = Testimonial::find($id);
          $testi->delete();
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
