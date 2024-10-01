@extends('layouts.app')

@section('title', 'Available cars')

@section('content')
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <x-card :car="$car"></x-card>
            </div>
        @endforeach
    </div>
@endsection
