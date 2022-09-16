@extends('layouts.main')

@section('title', 'Create a new work')

@section('main-content')

<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        @include('comics.includes.form')
    </form>
</div>


@endsection