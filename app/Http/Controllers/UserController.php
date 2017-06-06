<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::Orderby('id','DESC')->get();
        return response()->json($user);

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

        $password = $request->json()->get('password');
        // $hash = bcrypt($password);
        $hash = md5($password);
        
        $user = new User;

        $user->name = $request->json()->get('name');
        $user->email = $request->json()->get('email');
        $user->level = $request->json()->get('level');
        $user->password = $hash;

        $user->save();

        return response()->json(array('status'=>'ok','id'=>$user->id));
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
            $user = User::find($id);
            return response()->json($user);
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
        try{
        $password = $request->json()->get('password');
        $hash = md5($password);

        $user = User::find($id);
        $user->name = $request->json()->get('name');
        $user->email = $request->json()->get('email');
        $user->password = $hash;
        $user->save();

        return response()->json(array('status'=>'ok','id'=>$user->id));
        } catch (\Illuminate\Database\QueryException $ex) {
          return response()->json(array('status'=>'error','message'=>"Email Sudah ada"),400);
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
        $user = User::find($id);

        $user->delete();

        return response()->json(array('status'=>'ok','message'=>'Item deleted'));
    }

    public function cekuser(Request $request){
        $email = $request->json()->get('email');
        $password = $request->json()->get('password');

        $hash = md5($password);
        $where = array('email'=> $email, 'password'=>$hash );
        $data = User::where($where)->first();

        if (!is_null($data)) {
            # code...
            if ($data->level == 1) {
                    # code...
                return response()->json(
                    array(
                        'id'=>$data->id,
                        'name'=>$data->name,
                        'email'=>$data->email,
                        'password'=>$password,
                        'status'=>'ok',
                        'level'=>'admin'));
            }else{
                return response()->json(
                    array(
                        'id'=>$data->id,
                        'name'=>$data->name,
                        'email'=>$data->email,
                        'password'=>$password,
                        'status'=>'ok',
                        'level'=>'pegawai'));    
            }
            
        }else{
            return response()->json(array('status'=>'user tidak terdaftar'));
        }

    }
}
