<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mitglieder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <section class="text-gray-400 bg-gray-900 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">Name</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Biername</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Geburtsdatum</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Straße</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Ort</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Festnetz</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Mobil</th>
                                        @if(Auth::user()->perm_admin == 1)
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Aktionen</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    @php
                                        if($user->perm_activated == 0){
                                            $color = 'text-orange-400';
                                        }else{
                                            $color = '';
                                        }
                                    @endphp
                                    <tr>
                                        <td class="px-4 py-3 {{ $color }}">{{ $user->name }}</td>
                                        <td class="px-4 py-3 {{ $color }}">{{ $user->beername }}</td>
                                        <td class="px-4 py-3 {{ $color }}">{{ $user->birthdate }}</td>
                                        <td class="px-4 py-3 {{ $color }}">{{ $user->adr_street }}</td>
                                        <td class="px-4 py-3 {{ $color }}">{{ $user->adr_zip }} {{ $user->adr_city }}</td>
                                        <td class="px-4 py-3 {{ $color }}">{{ $user->phone_home }}</td>
                                        <td class="px-4 py-3 {{ $color }}">{{ $user->phone_mobile }}</td>
                                        @if(Auth::user()->perm_admin == 1)
                                            <td class="px-4 py-3">
                                                <a href="">@if($user->perm_activated == 0)&#9989;@else&#10060;@endif</a><a href="">&#128221;</a><a href="{{ route('profile.admin_destroy', $user->id) }}">&#128465;</a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
