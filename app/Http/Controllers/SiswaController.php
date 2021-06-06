<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    //
    public function index() {
        $siswa=Siswa::all();

        $data=['siswa' =>$siswa];

        return $data;
    }

    public function create(Request $request) {
        $siswa=new Siswa();
        $siswa->name=$request->name;
        $siswa->address=$request->address;
        $siswa->save();

        return "Data has been saved";
    }

    public function update(Request $request, $id) {
        $siswa=Siswa::find($id);
        $siswa->name=$request->name;
        $siswa->address=$request->address;
        $siswa->save();

        return "Data has been updated";
    }

    public function delete($id) {
        $siswa=Siswa::find($id);
        $siswa->delete();

        return "Data has been deleted";
    }

    public function detail($id){
        $siswa=Siswa::find($id);

        return $siswa;
    }
}
