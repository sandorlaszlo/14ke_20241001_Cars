@extends('layouts.app')

@section('title')
    {{ $car['title'] }}
@endsection

@section('content')
<div class="d-flex justify-content-center align-items-center">
    @isset($car['image'])
        <img src="{{ $car['image'] }}" class="" alt="{{ $car['title'] }}">
    @endisset
         <ul class="">
            <li class=""><b>Start date of production:</b> {{ $car['start_production'] ?? 'N/A' }}
            </li>
            <li class=""><b>Class:</b> {{ $car['class'] ?? 'N/A' }}</li>
        </ul>
</div>

@endsection
