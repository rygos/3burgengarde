<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kalender') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Termine {{ $year }}
                    <div class="flow-root">
                        <ul role="list" class="divide-y">
                            @foreach(\App\Models\Calendar::orderBy('start_date')->limit(5)->get() as $item)
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            @if($item->date_type == 'Alle')
                                                <img class="w-8 h-8" src="/images/kg_wappen.png" alt="KG Wappen">
                                            @endif

                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                <a href="{{ route('calendar.view', $item->id) }}">{{ $item->title }}</a>
                                            </p>
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                {{ $item->start_date->format('d.m.Y H:i') }} Uhr
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                {!! nl2br($item->description) !!}
                                            </p>
                                            @if($item->private_description)
                                                <p class="text-sm text-red-500 truncate dark:text-red-400">
                                                    Intern: {!! nl2br($item->private_description) !!}
                                                </p>
                                            @endif
                                            @php
                                                $users = \App\Models\User::wherePermActivated(1)->get();
                                                $count = [
                                                    0 => 0,
                                                    1 => 0,
                                                    2 => 0,
                                                    3 => 0,
                                                ];
                                                foreach($users as $i){
                                                    $com = \App\Models\CalendarCommitment::whereUserId($i->id)->where('calendar_id', $item->id)->first();
                                                    if($com){
                                                        $count[$com->status] += 1;
                                                    }else{
                                                        $count[3] += 1;
                                                    }
                                                }
                                            @endphp
                                            <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$count[1]}} - Ja</span>
                                            <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">{{$count[0]}} - Nein</span>
                                            <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{{$count[2]}} - Unklar</span>
                                            <span class="bg-pink-100 text-pink-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-pink-900 dark:text-pink-300">{{$count[3]}} - Keine Info</span>
                                        </div>

                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            @if($item->public == 0)
                                                <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Privat</span>
                                            @endif
                                            @if($item->only_active_members)
                                                <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Nur Aktive</span>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
