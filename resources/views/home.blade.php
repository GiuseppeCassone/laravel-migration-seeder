@extends('layouts/app')

@section('content')
<div class="row pt-5">
    @foreach($trains as $train)
    <div class="card p-4 bg-light text-bg-light gap-2 border-0">
        <h3 class="m-0"><strong>Company: </strong>{{ $train->company }}</h3>
        <p class="m-0"><strong>From: </strong>{{$train->departure_station}}</p>
        <p class="m-0"><strong>To: </strong>{{$train->arrival_station}}</p>
        <p class="m-0"><strong>At: </strong>{{$train->departure_time}}</p>
        <p class="m-0"><strong>Arrive Time: </strong>{{$train->arrival_time}}</p>
        <p class="m-0"><strong>Train Code: </strong>{{$train->code}}</p>
        <p class="m-0"><strong>Carriage Number: </strong>{{$train->carriage}}</p>
        <p class="m-0"><strong>On Schedule: </strong>{{$train->on_schedule}}</p>
        <p class="m-0"><strong>Cancelled: </strong>{{$train->cancelled}}</p>
        <p class="m-0"><strong>Date: </strong>{{$train->departure_date}}</p>
    </div>
    @endforeach
</ul>
@endsection