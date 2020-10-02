<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rest;
class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->search){
            $search = request()->search;
            $rest = Rest::where('id', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%')->get();
        }else{
            $rest = Rest::all();
        }
        
        return view('index',compact('rest'));
    }

     public function APIindex(Request $request)
    {
        if(request()->search){
            $search = request()->search;
            $rest = Rest::where('id', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%')->get();
        }else{
            $rest = Rest::all();
        }
        return $rest;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'    => 'required|unique:App\Rest,name'
        ]);
        Rest::create($request->all());
        return redirect('/');
    }

    public function APIstore(Request $request)
    {
        $this->validate($request,[
            'name'    => 'required|unique:App\Rest,name'
        ]);
        Rest::create($request->all());
        return 'Berhasil Simpan';
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $rest = Rest::find($id);
        return view('show',compact('rest'));
    }

    public function APIshowData($id)
    {
        return $rest = Rest::find($id);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editData($id)
    {
          $rest = Rest::find($id);
          return view('edit',compact('rest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateData(Request $request, $id)
    {
        $this->validate($request,[
            'name'    => 'required|exists:App\Rest,name'
        ]);
        $rest = Rest::find($id);
        $rest->update($request->all());
        return redirect('/');
    }

    public function APIupdateData(Request $request, $id)
    {
        // $this->validate($request,[
        //     'name'    => 'required|exists:App\Rest,name'
        // ]);
        $validation = Validator::make($request->all(),[ 
            'name' => 'required|exists:App\Rest,name'
        ]);
        $rest = Rest::find($id);
        if($rest->name == $request->name){
            return 'name Duplicate';
        }
        else{
            $rest = Rest::find($id);
            $rest->update($request->all());
            return 'Berhasil Update';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteData($id)
    {
        $rest = Rest::find($id);
        $rest->delete();
        return redirect('/');
    }

    public function APIdeleteData($id)
    {
        $rest = Rest::find($id);
        $rest->delete();
        return 'Berhasil Delete';
    }
}
