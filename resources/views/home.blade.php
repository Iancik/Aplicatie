@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <p>Acesta este conținutul paginii principale.</p>
    <h1>Pe colegul din stanga mea la masa, il cheama {{$name}}</h1>
@foreach($groups as $group)
    {{$group}}
@endforeach
@endsection
