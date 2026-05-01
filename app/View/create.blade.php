@extends('layouts.app')

@section('content')

<h2>Novo Cheater</h2>

<form action="{{ route('cheaters.store') }}" method="POST">
    @include('cheaters.form')
</form>

@endsection