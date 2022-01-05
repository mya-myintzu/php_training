<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //main page
    public function list(){
        $data = Student::paginate(5);
        return view('student.list')->with(['student' => $data]);
    }

    public function insert(){
        return view('student.create');
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => "required" ,
            'region' => "required" ,
            'city' => "required" ,
            'dateOfJoin' => "required" ,
            'department' => "required" ,
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $this->getStudentData($request);
        Student::create($data); 
        return back()->with(['insertSuccess' => "Student information recorded.."]);

    }

    private function getStudentData($request){
        return [
            'name' => $request->name ,
            'region' => $request->region ,
            'city' => $request->city ,
            'dateOfJoin' => $request->dateOfJoin ,
            'department' => $request->department ,
        ];
    }

    public function edit($id){
        $data = Student::where('id',$id)->first();
        return view('student.edit')->with(['student'=>$data]);
    }

    public function update($id,Request $request){
        $validator = Validator::make($request->all(), [
            'name' => "required" ,
            'region' => "required" ,
            'city' => "required" ,
            'dateOfJoin' => "required" ,
            'department' => "required" ,
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $UpdateData = $this->getStudentData($request);
        Student::where('id' , $id)->update($UpdateData);
        return back()->with(['updateSuccess' => 'Update Successed!']);
    }

    public function delete($id){
        Student::where('id',$id)->delete();
        return back()->with(['deleteSuccess' => "Delete data successfully!."]);
    }


    public function show($id){
        $data = Student::where('id','=',$id)->get();
        return view('student.show')->with(['student'=>$data]);

    }




}