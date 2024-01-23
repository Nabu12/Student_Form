<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Hash, Validator;

class StudentController extends Controller
{
    public function index()
    {
        return view('create');
    }
    public function create(Request $request)
    {
        // $val = Validator::make($request->all(),[
        //     'name' => 'required|string|',
        //     'email' => 'required|string|unique:register|',
        //     'password' => 'required|string|confirmed',
        // ]);
        // if($val->fails())
        // {
        //     return redirect()->back();
        // }
        // else
        // {
            $std = new Students;
            $std->name = $request->name;
            $std->email = $request->email;
            $std->password = Hash::make($request->password);
            $std->save();
            flash("Successfully Created The Data",'success');
            return redirect()->back();
        // }
    }
    public function show(){
        $table_students = Students::all();
        return  view('show',compact('table_students'));
    }
    public function edit($idsss){
        return view('edit',compact('idsss'));

    }
    public function update(Request $req, $id){
        $std = Students::find($id);
        $std->name = $req->name;
        $std->email = $req->email;
        
        $std->password = Hash::make($req->password);
        $std->save();
        flash("successfully updated the data",'sucess');
        return redirect()->back();     

    }
    public function delete($id)
    {
        Students::where('id',$id)->delete();
        flash("Successfully Delete The Data",'success');
        return redirect()->back();
    }
    }

