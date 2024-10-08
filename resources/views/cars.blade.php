{{-- @dd($classes) --}}

@extends('layouts.app')

@section('title', 'Available cars')

@section('content')

    <div class="row">
        <form class="col-md-8 d-flex align-items-center my-3" action="/cars/search-by-class" method="POST">
            @csrf
            <label for="class">Class</label>
            <select class="form-select mx-2" id="class" name="class">
                @foreach ($classes as $class)
                    <option value="{{$class}}">{{$class}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>    

        <form class="col-md-4 d-flex align-items-center my-3" action="/cars/search-by-name" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" class="form-control mx-2" name="name" id="name" value="{{ old('name') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="row">
        @foreach ($cars as $car)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <x-card :car="$car"></x-card>
            </div>
        @endforeach
    </div>
@endsection
