@extends('layouts/app')

@section('content')
<div class="row">
    @foreach($trains as $train)
    @if($train->departure_date >= now())
    <div class="card">
        <h3>{{ $train->company }}</h3>
        <p>{{$train->departure_station}}</p>
        <p>{{$train->arrival_station}}</p>
        <p>{{$train->departure_time}}</p>
        <p>{{$train->arrival_time}}</p>
        <p>{{$train->code}}</p>
        <p>{{$train->carriage}}</p>
        <p>{{$train->on_schedule}}</p>
        <p>{{$train->cancelled}}</p>
        <p>{{$train->departure_date}}</p>
    </div>
    @endif
    @endforeach
</ul>
@endsection