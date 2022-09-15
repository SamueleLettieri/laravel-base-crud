@extends('layouts.main')

@section('title', 'Main comics')

@section('main-content')

<div class="container mt-5">
    <table class="table table-success table-striped">
    <thead class="text-center">
        <th>ID</th>
        <th>TITLE</th>
        <th>PRICE</th>
        <th>SERIES</th>
        <th>SALE_DATE</th>
        <th>TYPE</th>
        <th>Button</th>
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
            <td>
                <a href="{{route('comics.edit', $comic->id)}}" class="btn px-3 mx-2  btn-sm btn-primary">Edit</a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn px-3 mx-2  btn-sm btn-danger">Remove</button>
                </form>
            </td>
        </tr>
        @endforeach    
    </tbody>
    </table>
</div>



@endsection