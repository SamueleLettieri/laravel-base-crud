@extends('layouts.main')

@section('title', 'Comic: ' . $comic->title)

@section('main-content')

<div class="container mt-5">
    <div class="card text-center">
        <div class="card-header">
            Comic
        </div>
        <div class="text-center">
            <img src="{{$comic->thumb}}" class="card-img-top w-50 rounded-0 m-3" alt="{{$comic->title}}img">
        </div>    
        <div class="card-body">
            <h5 class="card-title m-3">{{$comic->title}}</h5>
            <p class="card-text m-3">{{$comic->description}}</p>

        </div>
        <div class="card-footer text-muted ">
            {{$comic->sale_date}}
        </div>
    </div>
</div>


@endsection