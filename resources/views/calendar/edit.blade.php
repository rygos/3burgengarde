<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Kalendereintrag bearbeiten
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Hier kann der Kalendereintrag bearbeitet werden.
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Alle Einträge mit einem * müssen ausgefüllt werden.
                            </p>

                            {{ Form::open(['route' => 'calendar.update', 'class' => 'mt-6 space-y-6']) }}
                            {{ Form::hidden('id', $item->id) }}
                            <div>
                                <x-input-label for="title" :value="__('Titel')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $item->title)" required autofocus autocomplete="Titel" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
                            <div>
                                <x-input-label for="start_date" :value="__('Startdatum')" />
                                <x-datetime-local id="start_date" name="start_date" class="mt-1 block w-full" :value="$item->start_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('start_date')" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('Beschreibung')" />
                                <x-textarea id="description" name="description" type="text" class="mt-1 block w-full" rows="6" autofocus>
                                    {{ $item->description }}
                                </x-textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>
                            <div>
                                <x-input-label for="private_description" :value="__('Interne Beschreibung (Nur für Mitglieder Sichtbar!)')" />
                                <x-textarea id="private_description" name="private_description" type="text" class="mt-1 block w-full" rows="6" autofocus>
                                    {{ $item->private_description }}
                                </x-textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('private_description')" />
                            </div>
                            <div>
                                <x-input-label for="date_type" :value="__('Eintragstyp (Für wen der Eintrag gültig/gedacht ist.)')" />
                                <x-select name="date_type" id="date_type" class="mt-1 block w-full">
                                    <option @if($item->date_type == 'Alle') selected @endif value="Alle">KG komplett</option>
                                    <option @if($item->date_type == '3BG') selected @endif value="3BG">3Burgengarde</option>
                                    <option @if($item->date_type == 'Public') selected @endif value="Public">Öffentlich</option>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('date_type')" />
                            </div>
                            <div>
                                <x-input-label for="public" :value="__('Öffentlich sichtbarer Eintrag?')" />
                                <x-select name="public" id="public" class="mt-1 block w-full">
                                    <option @if($item->public == 1) selected @endif value="1">Ja</option>
                                    <option @if($item->public == 0) selected @endif value="0">Nein, nur Intern</option>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('public')" />
                            </div>
                            <div>
                                <x-input-label for="only_active_members" :value="__('Nur für Aktive sichtbar?')" />
                                <x-select name="only_active_members" id="only_active_members" class="mt-1 block w-full">
                                    <option @if($item->only_active_members == 1) selected @endif value="1">Ja</option>
                                    <option @if($item->only_active_members == 0) selected @endif value="0">Nein</option>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('only_active_members')" />
                            </div>
                            <div>
                                <x-input-label for="only_admins" :value="__('Nur für Admins sichtbar?')" />
                                <x-select name="only_admins" id="only_admins" class="mt-1 block w-full">
                                    <option @if($item->only_admins == 1) selected @endif value="1">Ja</option>
                                    <option @if($item->only_admins == 0) selected @endif value="0">Nein</option>
                                </x-select>
                                <x-input-error class="mt-2" :messages="$errors->get('only_admins')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Speichern') }}</x-primary-button>
                            </div>
                            {{ Form::close() }}
                        </header>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
