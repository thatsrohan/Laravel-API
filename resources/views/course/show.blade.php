@extends('layouts.app')

@section('content')
<h1>Title:{{$course->title}}</h1>
<p>Instructor:{{$course->instructor}}</p>
<h1>Course Head{{$course->courseHead}}</h1>

@endsection