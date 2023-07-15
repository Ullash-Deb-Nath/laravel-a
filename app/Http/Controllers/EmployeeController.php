<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }
    public function store(Request $req){
        $obj = new Employee();
        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->birth_date = $req->dob;
        $obj->designation = $req->designation;
        $obj->salary = $req->salary;
        $obj->gender = $req->gender;
        $obj->is_active = $req->active;
        $obj->department = $req->department;
        if($obj->save()){
            echo 'Successfully Inserted';
        }
    }
    public function all(){
        // select * from employees
        $employees = Employee::all();
        return view('employee.all', compact('employees'));
    }
    public function edit($eid){
        // select * from employees where id=1
        $employee = Employee::find($eid);
        return view('employee.edit',compact('employee'));
    }
    public function update(Request $req){

    }
}
