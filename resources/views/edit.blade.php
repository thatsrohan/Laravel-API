@extends('layouts.app')
@section('content')

<h1>Add Course</h1>
<form method="post" action="{{ route('course.update',$course->id) }}">
@csrf 
@method('PUT')
<div>
    <label for="title">Course  Title</label>
    <input type="text" name="instructor" required>
</div>
<div>
    <label for="instructor">Course  Title</label>
    <input type="text" name="instructor" required>
</div>
<div>
    <label for="courseHead">Course  Title</label>
    <input type="text" name="instructor" required>
</div>
<button type="submit">Edit</button>
</form>
@endsection