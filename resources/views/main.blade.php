@extends('layouts.app')


@section('content')

    @auth
        <p>Logged In</p>
    @endauth

    <p>Working</p>
@endsection