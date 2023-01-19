<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Die nächsten 5 Termine
                    <div class="flow-root">
                        <ul role="list" class="divide-y">
                            @foreach(\App\Models\Calendar::orderBy('start_date', 'asc')->limit(5)->get() as $item)
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
                                                {{ $item->description }}
                                            </p>
                                            @if($item->private_description)
                                                <p class="text-sm text-red-500 truncate dark:text-red-400">
                                                    Intern: {{ $item->private_description }}
                                                </p>
                                            @endif
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
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Dein Zahlungsstand Monatsbeiträge {{ \Carbon\Carbon::now()->year }}
                    <div class="grid grid-cols-12">
                        @for($i=1; $i < 13; $i++)
                            @if(\App\Models\MonthlyFee::whereUserId(Auth::id())->where('year', \Carbon\Carbon::now()->year)->where('month', $i)->first())
                                <div><img src="/images/month/green/{{$i}}.png"></div>
                            @else
                                <div><img src="/images/month/red/{{$i}}.png"></div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
