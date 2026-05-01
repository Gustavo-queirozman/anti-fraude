@csrf

@if ($errors->any())
    <div class="bg-red-100 dark:bg-red-900 border border-red-400 text-red-700 dark:text-red-200 px-4 py-3 rounded mb-6">
        <strong class="font-bold">Corrija os erros abaixo:</strong>
        <ul class="mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="space-y-6">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
        <input
            type="text"
            id="name"
            name="name"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100 @error('name') border-red-500 @enderror"
            value="{{ old('name', $cheater->name ?? '') }}"
            placeholder="Digite o nome"
        >
        @error('name')
            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="cpf" class="block text-sm font-medium text-gray-700 dark:text-gray-300">CPF</label>
        <input
            type="text"
            id="cpf"
            name="cpf"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100 @error('cpf') border-red-500 @enderror"
            value="{{ old('cpf', $cheater->cpf ?? '') }}"
            placeholder="Digite o CPF"
        >
        @error('cpf')
            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="zipcode" class="block text-sm font-medium text-gray-700 dark:text-gray-300">CEP</label>
        <input
            type="text"
            id="zipcode"
            name="zipcode"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100 @error('zipcode') border-red-500 @enderror"
            value="{{ old('zipcode', $cheater->zipcode ?? '') }}"
            placeholder="Digite o CEP"
        >
        @error('zipcode')
            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col sm:flex-row gap-4">
        <button type="submit" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded text-center">
            {{ $buttonText ?? 'Salvar' }}
        </button>

        <a href="{{ route('cheaters.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-center">
            Cancelar
        </a>
    </div>
</div>