<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Course;

class CourseController extends Controller
{
    public function index(){
    //List All
    $courses=Course::all();
    return view('course.index',compact('courses'));
}
public function create(){
    //Routing to page/view which will create the form
    return view('course.create');
} 
public function store(Request $request){
    //This would create the entry for the course
    Course::create($request->all());
    return redirect()->route('course');
}
public function show($id){
//Fetching data from the database
$course=Course::find($id);
return view('course.show',compact('course'));
}w
public function edit($id){
    //Edit data
    $course=Course::find($id);
    return view('course.edit',compact('course'));
}
public function update(Request $request,$id){
    //Logic to update the record in the database
    Course::find($id)->update($request->all());
    return redirect()->route('course.index');
}
public function destroy(){
    //Delete the entry from the database
    Course::find($id)->delete();
    return redirect()->route('course.index');
}
}