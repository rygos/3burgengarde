<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profil löschen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Account löschen') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Bist du dir sicher, das folgender Account gelöscht werden soll?') }}<br>
                                {{ $user->name }}
                            </p>
                        </header>

                        <x-danger-button
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >{{ __('Account löschen') }}</x-danger-button>

                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('profile.admin_destroy_post') }}" class="p-6">
                                @csrf
                                <input type="hidden" name="userid" value="{{ $user->id }}">

                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Account löschen.') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Wenn dieser Account wirklich gelöscht werden soll, bitte hier das Wort "DELETE" ohne Anführungszeichen eingeben.') }}
                                </p>

                                <div class="mt-6">
                                    <x-input-label for="password" value="Password" class="sr-only" />

                                    <x-text-input
                                        id="delcheck"
                                        name="delcheck"
                                        type="text"
                                        class="mt-1 block w-3/4"
                                        placeholder="DELETE"
                                    />
                                </div>

                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Abbrechen') }}
                                    </x-secondary-button>

                                    <x-danger-button class="ml-3">
                                        {{ __('Account löschen.') }}
                                    </x-danger-button>
                                </div>
                            </form>
                        </x-modal>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
