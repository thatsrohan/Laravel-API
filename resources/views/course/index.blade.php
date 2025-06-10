@extends('layouts.app')
@section('content')

<h1>
    Courses
</h1>
<table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Course Type</th>
</tr>
</head>

<body>

</body>

@endsection
@foreach($courses as $course)
<tr>
<td>{{ $course->title}}</td>
<td>{{ $course->instructor }}</td>
<td>{{ $course->courseHead}}</td>
<form method='post' action="{{route('courses.destroy',$course->id)}}">
    @csrf 
    @method('DELETE')
    <button type="submit">Delete</button>
</tr>
@endforeach
</body>
</table>
    @endsection