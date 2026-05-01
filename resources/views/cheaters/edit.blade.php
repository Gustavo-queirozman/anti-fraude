@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold">Editar Inadimplente</h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">Atualize as informações do registro com segurança e rapidez.</p>
                </div>

                <form action="{{ route('cheaters.update', $cheater->id) }}" method="POST">
                    @method('PUT')
                    @include('cheaters.form', ['buttonText' => 'Atualizar'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection