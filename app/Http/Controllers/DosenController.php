<?php

namespace App\Http\Controllers;
use App\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $dosen=Dosen::all();

        $data=['dosen'=>$dosen];

        return $data;
    }

    public function create(Request $request){
        $dosen = new Dosen();
        $dosen->lname=$request->lname;
        $dosen->laddress=$request->laddress;
        $dosen->save();

        return "Data has been saved successfully";
    }

    public function update(Request $request, $lid){
        $dosen=Dosen::find($lid);
        $dosen->lname=$request->lname;
        $dosen->laddress=$request->laddress;
        $dosen->save();

        return "Data has been updated successfully";
    }

    public function delete($id){
        $dosen=Dosen::find($id);
        $dosen->delete();

        return "Data has been erased";
    }

    public function detail($lid){
        $dosen=Dosen::find($lid);

        return $dosen;
    }
}
