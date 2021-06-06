<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mkuliah;

class MkuliahController extends Controller
{
    //
    public function index() {
        $mkuliah=mkuliah::all();

        $data=['mkuliah'=>$mkuliah];

        return $data;
    }

    public function create(Request $request){//create data baru
        $mkuliah = new mkuliah();
        $mkuliah->mname = $request->mname;
        $mkuliah->kodekuliah = $request->kodekuliah;
        $mkuliah->sks = $request->sks;
        $mkuliah->save();

        return "Data has been saved";
    }

    public function update(Request $request, $mid){// update data baru
        $mkuliah = mkuliah::find($mid);
        $mkuliah->mname = $request->mname;
        $mkuliah->kodekuliah = $request->kodekuliah;
        $mkuliah->sks= $request->sks;
        $mkuliah->save();

        return "Data has been updated";
    }

    public function delete($mid){// delete data baru
        $mkuliah= mkuliah::find($mid);
        $mkuliah->delete();

        return "Data has been deleted";
    }

    public function details($mid){
        $mkuliah=mkuliah::find($mid);

        return $mkuliah;
    }
}
