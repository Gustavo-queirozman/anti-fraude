@extends('layouts.app')

@section('content')

<a href="{{ route('cheaters.create') }}">Novo</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>CEP</th>
        <th>Ações</th>
    </tr>

    @foreach($cheaters as $cheater)
    <tr>
        <td>{{ $cheater->id }}</td>
        <td>{{ $cheater->name }}</td>
        <td>{{ $cheater->cpf }}</td>
        <td>{{ $cheater->zipcode }}</td>
        <td>
            <a href="{{ route('cheaters.show', $cheater->id) }}">Ver</a>
            <a href="{{ route('cheaters.edit', $cheater->id) }}">Editar</a>

            <form action="{{ route('cheaters.destroy', $cheater->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection