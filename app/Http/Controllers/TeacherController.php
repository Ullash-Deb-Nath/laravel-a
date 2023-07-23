<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function create(){
        $divisions = Division::all();
        return view('teacher.create', compact('divisions'));
    }

    public function store(Request $req){
        $obj = new Teacher();
        $obj->name =  $req->emp_name;
        $obj->division_id = $req->emp_division;
        $obj->district_id = $req->emp_district;
        if($obj->save()){
            return response()->json([
                'teacher' => $obj
            ]);
        }
    }
}
