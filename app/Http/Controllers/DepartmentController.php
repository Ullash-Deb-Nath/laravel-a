<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department; // departments
class DepartmentController extends Controller
{
    public function create(){
        return view('department.create');
    }
    public function store(Request $request){
        $obj = new Department();
        $obj->name = $request->name;
        $obj->established_at =  $request->established;
        $obj->building =  $request->building;
        if($obj->save()){
            return redirect('department/all');
        }
        // INSERT INTO departments(name, established_at) VALUES ();
    }
    public function all(){
        $departments = Department::all();
        return view('department.all', compact('departments'));
    }
    public function edit($id){
        $department = Department::find($id);
        return view('department.edit', compact('department'));

    }
    public function update(Request $request, $id){
        $obj  = Department::find($id);
        $obj->name = $request->name;
        $obj->established_at =  $request->established;
        $obj->building =  $request->building;
        if($obj->save()){
            return redirect('department/all');
        }
    }
    public function delete($id){
        if(Department::find($id)->delete()){
            return redirect('department/all');
        }
    }
}
