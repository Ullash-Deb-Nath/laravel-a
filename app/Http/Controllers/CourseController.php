<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;  // departments
use App\Models\Course;      // courses
use DB;

class CourseController extends Controller
{
    
    public function create(){
        $departments = Department::all();   // select * from departments
        
        return view('course.create', compact('departments'));

    }


    public function store(Request $req){
        $obj = new Course(); 
        $obj->name = $req->name;
        $obj->short_name = $req->shortName;
        $obj->course_code = $req->course_code;
        $obj->credit = $req->credit;
        $obj->type = $req->type;
        $obj->department_id = $req->department;

        if($obj->save()){
            return redirect('course/all');

        }
    }


    public function all(){

        // Eloquent Syntex
        // $courses = Course::join('departments', 'courses.department_id', 'departments.id')
        //                 ->select('courses.*','departments.name as dept_name')
        //                 ->get();


        // Query Builder
        $courses = DB::table('courses')->join('departments', 'courses.department_id', 'departments.id')
                            ->select('courses.*','departments.name as dept_name')
                            ->get();


        return view('course.all', compact('courses'));
    }


    public function edit($id){
        $course = Course::find($id);
        $departments = Department::all();
        return view('course.edit', compact('course', 'departments'));

    }


    public function update(Request $req, $id){
        $obj = Course::find($id);
        $obj->name = $req->name;
        $obj->short_name = $req->shortName;
        $obj->course_code = $req->course_code;
        $obj->credit = $req->credit;
        $obj->type = $req->type;
        $obj->department_id = $req->department;

        if($obj->save()){
            return redirect('course/all');

        }

    }


    public function delete($id){
        if(Course::find($id)->delete()){
            return redirect('course/all');
        }

    }
}
