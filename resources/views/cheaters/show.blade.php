@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold">Detalhes do Inadimplente</h2>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
                        <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $cheater->name }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">CPF</label>
                        <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $cheater->cpf_masked }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">CEP</label>
                        <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $cheater->zipcode_masked }}</p>
                    </div>
                </div>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('cheaters.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded text-center">
                        Voltar
                    </a>

                    <a href="{{ route('cheaters.edit', $cheater->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded text-center">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection