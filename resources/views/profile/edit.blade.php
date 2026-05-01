<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Dados do Perfil Section -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">Meus Dados</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Avatar Section -->
                        <div class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-700 rounded-lg p-8 md:col-span-2 lg:col-span-1">
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white text-4xl font-bold mb-4">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $user->name }}</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Usuário</p>
                        </div>

                        <!-- User Information -->
                        <div class="space-y-4 md:col-span-2 lg:col-span-1">
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                <p class="text-xs uppercase tracking-wide text-gray-600 dark:text-gray-400 font-semibold">Nome Completo</p>
                                <p class="text-lg font-medium text-gray-900 dark:text-gray-100 mt-1">{{ $user->name }}</p>
                            </div>

                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                <p class="text-xs uppercase tracking-wide text-gray-600 dark:text-gray-400 font-semibold">E-mail</p>
                                <p class="text-lg font-medium text-gray-900 dark:text-gray-100 mt-1">{{ $user->email }}</p>
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <p class="text-xs text-amber-600 dark:text-amber-400 mt-2">⚠️ E-mail não verificado</p>
                                @else
                                    <p class="text-xs text-green-600 dark:text-green-400 mt-2">✓ E-mail verificado</p>
                                @endif
                            </div>

                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                <p class="text-xs uppercase tracking-wide text-gray-600 dark:text-gray-400 font-semibold">Membro desde</p>
                                <p class="text-lg font-medium text-gray-900 dark:text-gray-100 mt-1">{{ $user->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Profile Form -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Form -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Form -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
