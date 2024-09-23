@extends('layouts.main')
@section('content')
<h1>flby</h1>
    {{ $c }}<br/>
    {{ $dev }}

    @for ($i = 1800; $i < 1850; $i++)
        <p> {{ $i }} 
            @if($i % 4 == 0 && $i % 100 != 0 || $i % 400 == 0)
                 <span>leap</span>
            @endif
        </p>
    @endfor
@endsection
