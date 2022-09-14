@extends('layouts.main')

@section('title', 'Main comics')

@section('main-content')

<div class="container mt-5">
    <table class="table table-success table-striped">
    <thead>
        <th>ID</th>
        <th>TITLE</th>
        <th>PRICE</th>
        <th>SERIES</th>
        <th>SALE_DATE</th>
        <th>TYPE</th>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
        </tr>
        @endforeach    
    </tbody>
    </table>
</div>



@endsection