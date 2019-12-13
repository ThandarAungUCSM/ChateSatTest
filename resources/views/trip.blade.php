@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Trip page
                    <!-- {{$trips}} -->
                    @foreach($trips as $trip)
                       <td>{{ $trip->id }}</td>s
                    @endforeach
                </div>
                {{ $trips->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
