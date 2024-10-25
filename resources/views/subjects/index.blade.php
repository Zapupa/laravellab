@extends('layouts.main')
@section('content')
<div class='container md:mx-auto'>

    @foreach ($subjects as $subject)
        <div>{{$subject->title}}</div>
        <div>
            @foreach ($subject->students as $student)
                <div class="flex gap-6 border">
                    <p>{{$student->lname}}</p>
                    <p>{{$student->fname}}</p>
                    <p>{{$student->pivot->grade}}</p>
                </div>
            @endforeach
        </div>
    @endforeach

</div>
@endsection()