@extends('layouts.app')

@section('content')

<h2>Detalhes</h2>

<p><strong>Nome:</strong> {{ $cheater->name }}</p>
<p><strong>CPF:</strong> {{ $cheater->cpf }}</p>
<p><strong>CEP:</strong> {{ $cheater->zipcode }}</p>

<a href="{{ route('cheaters.index') }}">Voltar</a>

@endsection