@extends('layouts.app')
@section('content')

<h1>Add Course</h1>
<form method="post" action="{{ route('course.store') }}">
@csrf 
<div>
    <label for="title">Course  Title</label>
    <input type="text" name="instructor" required>
</div>
<div>
    <label for="instructor">instructor</label>
    <input type="text" name="instructor" required>
</div>
<div>
    <label for="courseHead">courseHead</label>
    <input type="text" name="instructor" required>
</div>
<button type="submit">Submit</button>
</form>
@endsection